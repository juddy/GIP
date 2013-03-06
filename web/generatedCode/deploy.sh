#!/bin/bash
# ratty deploy script for GIP apps

DEPDIR="/var/www/"
if [ -z $1 ]
then
	echo "Need project to deploy."
	exit 1
else
	PROJ=$1
fi

echo "Setting perms for $PROJ"
chmod -R 755 $PROJ

echo "Making app.png"
APPDIR=$(find ./$PROJ -depth -type d | head -n1 | awk -F\/ '{print $3}')
convert -background transparent -fill black -font /usr/share/fonts/truetype/droid/DroidSans-Bold.ttf -pointsize 42 label:$APPDIR ./$PROJ/$APPDIR/app.png

echo "Moving app to $DEPDIR"
cp -aR $PROJ $DEPDIR


echo "Done: http://$(hostname)/$PROJ"
