# uspto.data.commerce.gov health datasets
* [PUBLIC Patent Application Information Retrieval (PAIR) Extracts (2001 - Present)](https://uspto.data.commerce.gov/d/gyta-dd8w) - Reed Tech crawls the USPTO Public PAIR (Patent Application Information Retrieval) website for patent documents, including Image File Wrappers. This daily crawl is for five hours each night and retrieves both already-submitted documents and new documents as the USPTO makes them publicly available.

Except for repackaging into zip files, these documents are hosted by Reed Tech unchanged. A single zip file is created for each patent application. There is detailed documentation about the format as well as the overview below.

How to access PAIR data:
To access a particular zipfile, replace APP_NUM in the following URL with an application number of interest:  
http://patents.reedtech.com/downloads/pair/APP_NUM.zip  
  
For example: http://patents.reedtech.com/downloads/pair/12102391.zip
                                                                                            
Over 7,624,417 applications are available. Additional applications will be added regularly as the crawl progresses. 

Overview of zipfile contents:
Each zipfile contains the following:  
•A README.txt file which indicates when the data was obtained.
•Data files (*.tsv), in tab-delimited text format, compatible with many spreadsheet programs. Each data file represents one tab from the PAIR interface: Address and Attorney/Agent, Application Data, Continuity Data, Foreign Priority, Image File Wrapper, Patent Term Adjustments / Extension History, Transaction History. 
◦Data tables from the PAIR interface are organized in one of two ways: 
1. Labels in the first column. (Example: Application Data tab.) The second column contains the corresponding value (example: Application number and 12/102,391).
2. Labels in the first row. (Example: Transaction History tab, with labels such as Date and Transaction Description.) Each subsequent row contains the corresponding values for one data item. (In the example, each row represents a single transaction.) 
◦Some *.tsv files contain more than one table, separated by a blank line. 
◦The Image File Wrapper data file is put in a separate directory along with the additional content that it links to. An extra Filename column is added to the *.tsv file to indicate the appropriate file for each item.
•Image files (*.pdf), in Adobe PDF format. This data is only available for patent applications which have an Image File Wrapper tab on the USPTO PAIR site. 

Disclaimer:
No guarantees are made with respect to the completeness or accuracy of this data. In particular, the crawl may discover and retrieve additional documents over time, even for applications submitted long ago. Please visit the USPTO PAIR site for official, current, and complete information:  https://portal.uspto.gov/pair/PublicPair  (uses reCAPTCHA)