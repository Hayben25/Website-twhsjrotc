OPS Squadron Commander
____________________________________________________________________________
When the announcements file is a google doc click file/download/Web Page (.html,zipped) (1.PNG)

Inside the zipped folder find the html file(it should be the only one)

Rename the file to Announcements

Move the file to the website folder under _files and replace the previous Announcements.html file (2.PNG)

CS Officer
____________________________________________________________________________
The website can hold up to 3 different files

To upload a file take a cs signup and click file/download/Web Page(.html) (3.PNG)

Inside the zipped folder find the sheet(not the resources folder) and rename it to the spot on the website you want it to replace(cs-1 is top, cs-2 is middle, cs-3 is bottom) (4.PNG)

Move the file to the website folder under _files and replace the previous cs-#.html file (2.PNG)

Personnel Officer
____________________________________________________________________________
Once all of the data is available make columns in the order: first name, last name, rank, flight, cs hours, ldr hours, activities (5.PNG)

To put in the correct format click File/Download/Comma Separated Values(.csv) (6.PNG)

Go to http://localhost/phpmyadmin/index.php?route=/table/sql&db=twhsjrotc&table=cadets and run the command DELETE FROM `cadets`;(7.PNG)

Go to http://localhost/phpmyadmin/index.php?route=/table/import&db=twhsjrotc&table=cadets or click import on the top ribbon

Choose the .csv made earlier change the format to CSV using LOAD DATA, change Columns separated with: to , and click import (8.PNG)

To confirm the import click Browse or go to http://localhost/phpmyadmin/index.php?route=/sql&db=twhsjrotc&table=cadets&pos=0


Updating Cadet Guide/Syllabus/Policy Letters
____________________________________________________________________________
Download the new version of the file as a pdf (9.PNG)

Save the name as Cadet Guide, Syllabus, or Policy Letters

Move the files to the _files folder and replace the previous versions(10.PNG)

Updating the Meet The Instructors! tab
____________________________________________________________________________
Table format, header is images and 2 rows for names and descriptions

Formatting should be fine just add and remove image and text within their respective rows and classes
