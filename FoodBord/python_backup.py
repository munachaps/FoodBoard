import sys 
import json 
import csv 
from sklearn.feature_extraction.text import CountVectorizer 
from sklearn.naive_bayes import MultinomialNB 
from sklearn.model_selection import train_test_split, cross_val_score 
from sklearn.metrics import accuracy_score, classification_report, confusion_matrix 
import joblib
import re
import pandas as pd

def preprocess_data(input_file, output_file):
    with open(input_file, 'r', encoding='utf-8') as infile:
        reader = csv.reader(infile, delimiter='\t')
        preprocessed_data = []
        for row in reader:
            if len(row) == 2:  # Ensure the line has both text and label
                preprocessed_data.append(row)
            else:
                print(f"Skipped invalid line: {row}")
    
    with open(output_file, 'w', encoding='utf-8', newline='') as outfile:
        writer = csv.writer(outfile, delimiter='\t')
        writer.writerows(preprocessed_data)

input_file_path = 'Restaurant_Reviews.csv'
output_file_path = 'preprocessed_data.csv'
preprocess_data(input_file_path, output_file_path)


def load_data(file_path): 
    with open(file_path, 'r', encoding='utf-8') as file: 
        reader = csv.reader(file, delimiter='\t') 
        data = [] 
        labels = [] 
        for row in reader: 
            data.append(row[0]) 
            labels.append(int(row[1])) 
        return data, labels 


def train_and_evaluate(X_train, y_train, X_test, y_test): 
    vectorizer = CountVectorizer() 
    X_train_vectorized = vectorizer.fit_transform(X_train) 
    X_test_vectorized = vectorizer.transform(X_test) 

    classifier = MultinomialNB() 
    classifier.fit(X_train_vectorized, y_train) 
    y_pred = classifier.predict(X_test_vectorized) 

    print("Accuracy:", accuracy_score(y_test, y_pred)) 
    print("\nClassification Report:\n", classification_report(y_test, y_pred)) 
    print("\nConfusion Matrix:\n", confusion_matrix(y_test, y_pred)) 
    return classifier, vectorizer

def main(): 
    if len(sys.argv) != 2: 
        print("Usage: python script.py <data_file_path>") 
        return 
    
    data_file_path = sys.argv[1] 
    data, labels = load_data(data_file_path) 
    X_train, X_test, y_train, y_test = train_test_split(data, labels, test_size=0.2, random_state=42) 

    print("Training and evaluating the model...") 
    classifier, vectorizer = train_and_evaluate(X_train, y_train, X_test, y_test) 
    
    print("\nSaving the model and vectorizer...") 
    joblib.dump(classifier, 'restaurant_classifier.pkl')
    joblib.dump(vectorizer, 'count_vectorizer.pkl')

    print("\nPerforming cross-validation...") 
    X_vectorized = vectorizer.fit_transform(data) 
    scores = cross_val_score(classifier, X_vectorized, labels, cv=5) 
    print("Cross-validation scores:", scores) 
    print("Mean accuracy:", scores.mean()) 
