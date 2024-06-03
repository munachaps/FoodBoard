import sys
import json
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.naive_bayes import MultinomialNB

def train_and_predict(train_data, train_labels, test_data):
    vectorizer = CountVectorizer()
    X_train = vectorizer.fit_transform(train_data)
    classifier = MultinomialNB()
    classifier.fit(X_train, train_labels)
    
    X_test = vectorizer.transform(test_data)
    predictions = classifier.predict(X_test)
    
    return predictions.tolist()

if __name__ == "__main__":
    train_data = json.loads(sys.argv[1])
    train_labels = json.loads(sys.argv[2])
    test_data = json.loads(sys.argv[3])
    
    predictions = train_and_predict(train_data, train_labels, test_data)
    print(json.dumps(predictions))
