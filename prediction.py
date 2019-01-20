import pickle

filename = 'finalized_model.sav'
pickle.dump(Bestsvclassifier, open(filename, 'wb'))
loaded_model = pickle.load(open(filename, 'rb'))

prediction = loaded_model.predict()