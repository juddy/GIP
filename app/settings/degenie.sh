FILES=$(find ./ -name "*.php")

for file in $FILES
do
        sed -i 's/genie/gip/g' $file
        sed -i 's/GENIE/GIP/g' $file
        sed -i 's/PCG/GIP/g' $file
        sed -i 's/pcg/GIP/g' $file
        sed -i 's/genieConfi/gipConfi/g' $file
        sed -i 's/PHP Code Genie/GIP Isnt\ PCG/g' $file
        sed -i 's/Nilesh Doosoye/W. Kennedy/g' $file
        sed -i 's/\/GIP\/app\/se/\/home\/itomato\/openlpos.org\/GIP\/app\/se/g' $file
        echo " - $file"
done

DIRS=$(find ./ -name "genie*" -type d)

for dir in $DIRS
do
    mv $dir $(echo $dir | sed 's/genie/gip/')
    echo "Moved:"
    echo "$(echo $dir | sed 's/genie/gip/')"
done
