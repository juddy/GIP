FILES=$(find ./ -name "*" -type f | grep -v $0 | grep genie)

for file in $FILES
do
	sed -i 's/genie/gip/g' $file
	sed -i 's/PCG/GIP/g' $file
	sed -i 's/pcg/GIP/g' $file
	sed -i 's/genieConfiuration/gipConfiguration/g' $file
	sed -i 's/PHP Code Genie/GIP Isnt\ PCG/g' $file
	sed -i 's/Nilesh Doosoye/W. Kennedy/g' $file
	echo " - $file"
done

DIRS=$(find ./ -name "genie*" -type d)

for dir in $DIRS
do
    mv $dir $(echo $dir | sed 's/genie/gip/')
    echo "Moved:"
    echo "$(echo $dir | sed 's/genie/gip/')"
done

