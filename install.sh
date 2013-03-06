#!/bin/bash
#
# Site installer for GIP
#
# W. Kennedy
# Mon Jun  4 12:54:17 PDT 2012
#
###################################


get_path(){
# Get path
echo "Need path to installation."
echo "Shall we try $PWD/ ? [Y/n]"

read $QINSTPATH
case QINSTPATH in
    
	Y|y)
        echo "Using $PWD/ as the installation path in config files."
        INSTPATH="$PWD/"
        ;;

       n|N)
        echo "Feed me an installation path."
        read INSTPATH
        echo "Using $INSTPATH"
        ;;

esac
}

get_path

# Set root domain
echo "Setting root GIP path.."
for i in $(find ./ -name "*.php") ; do sed -i "s/GIPDIR/$INSTPATH/g" $i ; echo $i ; done

# Good enough..
echo "You should create the database you with to connect to."
echo "GIP is configured to allow you to specify the host, database and connection info in the GUI."
echo "The output from the tool is viewable in the web/generatedCode subdirectory"
echo ; echo
echo "Thanks for trying GIP"

