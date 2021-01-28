Documentation of Covid-19 Past Data Visualization of Nepal

In this application, I have used sagemake to plot a graph to show total cases, new cases and total death in Nepal due to Covid-19.
1. Frist import all necessary libraries.
2. Then read .csv file where data is stored. In my case, I have stored my .csv file in s3 bucket.
	So, i have put link of s3 bucket to read data. and make date column as index column as we have to visualize data as per date.
3. The above used .csv file has whole world data so we are just going to take data of nepal.
	so we select rows where location is Nepal.
4. then plot graphs using matplotlib.pyplot. and the graphs are attached with this file.
