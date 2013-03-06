for file in *.php
do 
sed -i 's/simple/basic/' $file 
done
