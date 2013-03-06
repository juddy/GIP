<? 
class ipFunctions
{

	// check if this IpAddress is in IpAddressArray
	// IpAddressArray can contain range of Ips with * as wildcard.. e.g 192.68.*.*
	// useful to allow users access based on ip address list
	function isIpAddressInList($thisIpAddress,$ipArrayToCheck)
	{

		// Breaking IP address in 4 ip blocks
		// for individual comparison
		list($ipor1,$ipor2,$ipor3,$ipor4)=explode('.',$thisIpAddress);
		$goodip=0;
		
                             for ($a=0; $a<count($ipArrayToCheck);$a++)
                             { 			

					
				$ipadd1 = $ipArrayToCheck[$a];
				// Breaking Stored ip address into 4 ip blocks
				list($ip1,$ip2,$ip3,$ip4)=explode('.',$ipadd1);
				
				
				// Checking for first IP block
				// If first block is not *
				// * is wildkey.. anything goes in this ip block
				if ($ip1 != "*")
				{
					// If both similar, then first block correct
					if ($ip1==$ipor1)
					{
						$correct1=1;
					}
					else
					{
						$correct1=0;
					}
				}
				else if ($ip1=="*")
				{
					$correct1=1;
				}
				
				
				
				// Checking for second IP Block
				if ($ip2 != "*")
				{
					if ($ip2==$ipor2)
					{
						$correct2=1;
					}
					else
					{
						$correct2=0;
					}
				}
				else if ($ip2=="*")
				{
					$correct2=1;
				}
				
				// Checking for third IP Block
				if ($ip3 != "*")
				{
					if ($ip3==$ipor3)
					{
						$correct3=1;
					}
					else
					{
						$correct3=0;
					}
				}
				else if ($ip3=="*")
				{
					$correct3=1;
				}
				
				
				// Checking for fourth IP Block
				if ($ip4 != "*")
				{
					if ($ip4==$ipor4)
					{
						$correct4=1;
					}
					else
					{
						$correct4=0;
					}
				}
				else if ($ip4=="*")
				{
					$correct4=1;
				}
				
				
				// Checking if all 4 IP Blocks are correct
				if (($correct1==1) and ($correct2==1) and ($correct3==1) and ($correct4==1))
				{
					$goodip=1;
					
					break;
				}
				else
				{
					$goodip=0;
				}
				
				
								
			}  // end for
			

		
		
		return $goodip;
		
		
	}
	
}
/*
$PRIVILEGED_IPS[] = "192.22.33.*";
$PRIVILEGED_IPS[] = "198.76.*.*";



$thisIpFilter = new ipFilter();
$result = $thisIpFilter->isIpAddressInList("198.765.562.56",$PRIVILEGED_IPS);
echo "Result  : ".$result;

*/
?> 