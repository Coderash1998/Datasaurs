import os

import csv
os.remove("contact_data.csv")
with open('contact_data.csv', 'w', newline='') as csvfile:
    filewriter = csv.writer(csvfile, delimiter=',',
                            quotechar='"', quoting=csv.QUOTE_MINIMAL)
    filewriter.writerow(['index','SUBDIVISION','YEAR','JUN','JUL','AUG','SEP','OCT','total','Preci-Jun','Preci-Jul','Preci-Aug','Preci-Sep','Preci-Ocr','AvgTemp','%ForCover','longitude','lattitude','humidity','pressure at sea_level', 'pressrue at grnd_level'])
csvfile.close()
"""
os.remove("BaseLookup.csv")
print("File Removed!")
"""
