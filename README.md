# Garni Weather Station server PHP script
This simple php script gets data values from your Garni Meteo Station Request and store data into table. You need to setup few things before start.
Database model is already included in file db-model.mwb which can be opened using MySQL Workbench.

## Requirements
- Installed App "WS View" on Your Smartphone https://play.google.com/store/apps/details?id=com.ost.wsview
- PHP 5.3+ (tested on 5.6, 7.1)
- MySQL Database
- FTP connection to your server (you also need ftp client, or Total Commander)

## Instalation

1. Open mobile App, connect to station and set interval and domain in section for custom data reporting 
2. Edit file index.php and replace "xxx" credentials for SQL connection by Your own (db server address, username, password, tableName)
3. Upload script **index.php** to your directory (file can be renamed)
4. Open db-model.mwb using MySQL Workbench and copy the table sructure (right click on the table name)
5. Paste to PHP My Admin and create table 

## Testing
1. Check your php script if everything works OK. Try this curl request (You can import this Curl to Postman too):
> curl --location --request POST 'http://PUTYOURDOMAIN.NAME/index.php' \
  --form 'PASSKEY=12345679' \
  --form 'stationtype=XYZ' \
  --form 'dateutc=XYZ' \
  --form 'tempinf=XYZ' \
  --form 'humidityin=XYZ' \
  --form 'baromrelin=XYZ' \
  --form 'baromabsin=XYZ' \
  --form 'tempf=XYZ' \
  --form 'humidity=XYZ' \
  --form 'winddir=XYZ' \
  --form 'windspeedmph=XYZ' \
  --form 'windgustmph=XYZ' \
  --form 'maxdailygust=XYZ' \
  --form 'rainratein=XYZ' \
  --form 'eventrainin=XYZ' \
  --form 'hourlyrainin=XYZ' \
  --form 'dailyrainin=XYZ' \
  --form 'weeklyrainin=XYZ' \
  --form 'monthlyrainin=XYZ' \
  --form 'totalrainin=XYZ' \
  --form 'solarradiation=XYZ' \
  --form 'uv=AAA' \
  --form 'wh65batt=XYZ' \
  --form 'wh26batt=XYZ' \
  --form 'freq=XYZ' \
  --form 'model=XYZ'

2. You should see the new record in the imported table in Your Database.

3. Check that real values appeared in Your table after the set time period in app WS VIEW 
 

## Known bugs
- there is problem if you use SSL (https) on your server. You need to use port 80 (http)

## Future 
- Angular client app for displaying Meassured values 
- Implement Logic for watching the threshold of set values 

## Improvements  
- Any improvement and Pull Request is welcome 