#!/bin/bash
#
# Site installer for GIP
#
# W. Kennedy
# Thu Sep  2 10:55:00 PDT 2010
#
###################################


# Setup configuration file pointer
echo "Location of" 
for i in $(find ./ -name "*.php") ; do sed -i 's/\/home\/itomato\/openlpos.org//g' $i ; echo $i ; done

# Set root domain
for i in $(find ./ -name "*.php") ; do sed -i 's/\/home\/itomato\/openlpos.org//g' $i ; echo $i ; done
