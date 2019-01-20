import pickle
import pandas as import pd
import json
def prediction(fileName):
    file = pd.read_csv(fileName)
    filename = 'finalized_model.sav'
    loaded_model = pickle.load(open(filename, 'rb'))

    prediction = loaded_model.predict(file)

    data = {}
    data["thing"] = []
    data["thing"].append({"length": prediction})

    with open('data.json', 'w') as outfile:
        json.dump(data, outfile)
