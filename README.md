# Datasaurs

Flood Prediction
As we see the drastic change in the weather over the globe in a short span of time, the probablity of disaster thus have increased more. The ice caps are melting at the high rate, the sea level is increasing. Even for city like Mumbai it is been predicted that South Mumbai within few decades may go below the sea level. Thus its the time to take precautions and predict such disaster before they occur and try to settle the situation.

Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

# Prerequisites:<br />

Python >= 3.5 <br />
SKlearn<br />
Numpy<br />
Pandas<br />
Matplotlib<br />
Map Box<br />

# Summary: <br />

Floods are among the most cruel and destructive acts of nature; causing damage to human life and property along with damaging the agricultural output and animal life alike. In majority of the cases inundation of an area is due to excessive precipitation, proximity to a water body, heavy rainfall over a period of time and lack of trees.

Flooding occurs when an extreme volume of water is carried by rivers, creeks and many other geographical features into areas where the water cannot be drained adequately. This can be seen during heavy rainfall, if the drainage systems in the residential areas are inadequate, or unchecked civil development severely impedes the functionality of an otherwise acceptable drainage system.

The idea is to implement a robust model, culminating all the desired factors to predict a possibility of flooding in a particular area. The desired factors would be duly analysed and the output would be generated with an increased amount of accuracy. The dataset encompassing all the factors would be created as a base to the utility of the mentioned project. The intention is to carefully analyse the aforementioned factors and implement a model which would help the masses from the alarming risk of floods.

Various Machine Learning models such as SVM, Random Forest Classifier etc. will be trained and tested on the dataset and the most accurate and appropriate model will be used for future predictions. After selecting the appropriate model, the flood can be simulated using hydraulic modelling assessing the factors like rainfall, soil capacity etc. which would help in visual representation and prediction of areas where it can be flooded. 

The current system is totally fixated on the single factor which is rainfall data and other factors such as altitude and precipitations are ignored. For current system to work the properly sensors are planted in particular area so the model performance is reliant on the accuracy of sensors. The current system is not open source in nature. It requires specialized skills to interpret data from graph and perform the analysis because most of the time input data is available in form of map. Our system intended to resolve these issues. Project will be beneficial to the government agencies for planning the flood management.

# Design: <br />

The location is given by the user and based on that location the diﬀerent web scraping tools are used in order to get the data regarding to the altitude, rainfall data, location precipitation, temperature and other factors. This data will be filtered according to the format of model and after cleaning of data it is applied to the model based on that the probability of flood in that area is predicted.

The location is given by the user and based on that location the diﬀerent web scraping tools are used in order to get the data regarding to the altitude ,rainfall data, location precipitation, temperature and other factors .This data will be filtered according to the format of model and after cleaning of data it is applied to the model based on that the probability of flood in that area is predicted. Models used are SVM, decision tree, linear regression, CNN etc.it is observed that the neural networks gives the highest accuracy and do not cause over fitting eﬀect.

This output can be visualized using diﬀerent tools to predict the eﬀect of flood in that area, the Output from diﬀerent model is compared in order to achieve the maximum accuracy.

# Data Visualization <br />

The flood prone areas can be indicated with indicators using different colors for most affected areas. Enabling the people take necessary precautions.

