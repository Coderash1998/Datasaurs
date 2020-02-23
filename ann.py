# Artificial Neural Network

# Installing Theano
# pip install --upgrade --no-deps git+git://github.com/Theano/Theano.git

# Installing Tensorflow
# Install Tensorflow from the website: https://www.tensorflow.org/versions/r0.12/get_started/os_setup.html

# Installing Keras
# pip install --upgrade keras

# Part 1 - Data Preprocessing

# Importing the libraries
import numpy as np

import pandas as pd
from sklearn.model_selection import train_test_split

# Importing the dataset
data = pd.read_csv("KERALADATA.csv")

data1 = pd.read_csv("contact_data.csv")


X = data.drop(['index','SUBDIVISION','YEAR','flood','Preci-Jun','Preci-Aug','Preci-Jul','Preci-Sep','Preci-Oct','AvgTemp','longitude','lattitude','humidity'	,'pressure at sea_level','pressrue at grnd_level'], axis=1)
Y= data['flood']
Y1 = data1.drop(['index','SUBDIVISION','YEAR','Preci-Jun','Preci-Aug','Preci-Jul','Preci-Sep','Preci-Oct','AvgTemp','longitude','lattitude','humidity','pressure at sea_level','pressrue at grnd_level'], axis=1)

#splitting data
X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.1, random_state=42)



# Feature Scaling
from sklearn.preprocessing import StandardScaler

# Part 2 - Now let's make the ANN!

# Importing the Keras libraries and packages
import keras
from keras.models import Sequential
from keras.layers import Dense

# Initialising the ANN
classifier = Sequential()

# Adding the input layer and the first hidden layer
classifier.add(Dense(output_dim = 6, init = 'uniform', activation = 'relu', input_dim = 7))

# Adding the second hidden layer
classifier.add(Dense(output_dim = 6, init = 'uniform', activation = 'relu'))

# Adding the output layer
classifier.add(Dense(output_dim = 1, init = 'uniform', activation = 'sigmoid'))

# Compiling the ANN
classifier.compile(optimizer = 'adam', loss = 'binary_crossentropy', metrics = ['accuracy'])

# Fitting the ANN to the Training set
classifier.fit(X_train, y_train, batch_size = 10, nb_epoch = 20)

# Part 3 - Making the predictions and evaluating the model

# Predicting the Test set results

y_pred = classifier.predict(Y1)
print(y_pred)


