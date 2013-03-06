FILES=$(find ./ -name "*.php")

for file in $FILES
do
        sed -i 's/SOURCEFORGE/GITHUB/g' $file
        sed -i 's/Sourceforge/GitHub/g' $file
        sed -i 's/SourceForge/GitHub/g' $file
        echo " - $file"
done

