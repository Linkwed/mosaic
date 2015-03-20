# Mosaic

## A simple & Tiny PHP mosaic generator

What inside ? A single, yet lone, webpage. Select and upload images files (jpg,png,gif,bmp,etc...) and watch it become a part of the mosaic, share this space with stranger, create something together.

## How this is working

The upload files are treated by a different php process, in the *form.php* (included in index.php), this is the default cycle :

1. Upload
2. Only image/* type files will be accepted
3. Rename the file with a default prefix "0.xxx"
4. Only final files under 10mo will be accepted
5. Desactivate script files, by transform it in .txt, the reject it
6. Save current state files in the directory /files
7. Resize to 30x30
9. Save current state files in the directory /files_min
10. End

The treated files will be visible in the index page, in the *mosaic.php* (included in index.php). This php files will display the min_files (from /files_min) to optimise page loading, and link it to the full size one (in /file)

## Style

Simple responsiv flat design, working on all modern device and webbrowser, no javascript required. 

