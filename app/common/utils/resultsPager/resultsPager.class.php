<? 
class resultsPager
{

	// Variables
	// linkToGo  field from table
	var $linkToGo ;
	// totalRows  field from table
	var $totalRows ;
	// startRow  field from table
	var $startRow ;
	// rowsPerPage  field from table
	var $rowsPerPage ;
	// totalPages  field from table
	var $totalPages ;
	// currentPage  field from table
	var $currentPage ;
	// pageDelimeter field from table
	var $pageDelimeter;
	var $nextStartRow ;
	// nextStartPage field from table
	var $nextStartPage;
	var $numPagesToShowInList;
	var $pageUpperBound ;
	// pageLowerBound field from table
	var $pageLowerBound;

	/**
	* @return returns value of variable $linkToGo
	* @desc getLinkToGo : Getting value for variable $linkToGo
	*/
	function getLinkToGo ()
	{
		return $this->linkToGo ;
	}

	/**
	* @param param : value to be saved in variable $linkToGo
	* @desc setLinkToGo : Setting value for $linkToGo
	*/
	function setLinkToGo ($value)
	{
		$this->linkToGo  = $value;
	}

	/**
	* @return returns value of variable $totalRows
	* @desc getTotalRows : Getting value for variable $totalRows
	*/
	function getTotalRows ()
	{
		return $this->totalRows ;
	}

	/**
	* @param param : value to be saved in variable $totalRows
	* @desc setTotalRows : Setting value for $totalRows
	*/
	function setTotalRows ($value)
	{
		$this->totalRows  = $value;
	}

	/**
	* @return returns value of variable $startRow
	* @desc getStartRow : Getting value for variable $startRow
	*/
	function getStartRow ()
	{
		return $this->startRow ;
	}

	/**
	* @param param : value to be saved in variable $startRow
	* @desc setStartRow : Setting value for $startRow
	*/
	function setStartRow ($value)
	{
		$this->startRow  = $value;
	}

	/**
	* @return returns value of variable $rowsPerPage
	* @desc getRowsPerPage : Getting value for variable $rowsPerPage
	*/
	function getRowsPerPage ()
	{
		return $this->rowsPerPage ;
	}

	/**
	* @param param : value to be saved in variable $rowsPerPage
	* @desc setRowsPerPage : Setting value for $rowsPerPage
	*/
	function setRowsPerPage ($value)
	{
		$this->rowsPerPage  = $value;
	}

	/**
	* @return returns value of variable $totalPages
	* @desc getTotalPages : Getting value for variable $totalPages
	*/
	function getTotalPages ()
	{
		return $this->totalPages ;
	}

	/**
	* @param param : value to be saved in variable $totalPages
	* @desc setTotalPages : Setting value for $totalPages
	*/
	function setTotalPages ($value)
	{
		$this->totalPages  = $value;
	}

	/**
	* @return returns value of variable $currentPage
	* @desc getCurrentPage : Getting value for variable $currentPage
	*/
	function getCurrentPage ()
	{
		return $this->currentPage ;
	}

	/**
	* @param param : value to be saved in variable $currentPage
	* @desc setCurrentPage : Setting value for $currentPage
	*/
	function setCurrentPage ($value)
	{
		$this->currentPage  = $value;
	}

	/**
	* @return returns value of variable $pageDelimeter
	* @desc getPageDelimeter : Getting value for variable $pageDelimeter
	*/
	function getPageDelimeter()
	{
		return $this->pageDelimeter;
	}

	/**
	* @param param : value to be saved in variable $pageDelimeter
	* @desc setPageDelimeter : Setting value for $pageDelimeter
	*/
	function setPageDelimeter($value)
	{
		$this->pageDelimeter = $value;
	}


	/**
	* @return returns value of variable $nextStartRow
	* @desc getNextStartRow : Getting value for variable $nextStartRow
	*/
	function getNextStartRow ()
	{
		return $this->nextStartRow ;
	}

	/**
	* @param param : value to be saved in variable $nextStartRow
	* @desc setNextStartRow : Setting value for $nextStartRow
	*/
	function setNextStartRow ($value)
	{
		$this->nextStartRow  = $value;
	}

	/**
	* @return returns value of variable $nextStartPage
	* @desc getNextStartPage : Getting value for variable $nextStartPage
	*/
	function getNextStartPage()
	{
		return $this->nextStartPage;
	}

	/**
	* @param param : value to be saved in variable $nextStartPage
	* @desc setNextStartPage : Setting value for $nextStartPage
	*/
	function setNextStartPage($value)
	{
		$this->nextStartPage = $value;
	}


	/**
	* @return returns value of variable $numPagesToShowInList
	* @desc getNumPagesToShowInList : Getting value for variable $numPagesToShowInList
	*/
	function getNumPagesToShowInList()
	{
		return $this->numPagesToShowInList;
	}

	/**
	* @param param : value to be saved in variable $numPagesToShowInList
	* @desc setNumPagesToShowInList : Setting value for $numPagesToShowInList
	*/
	function setNumPagesToShowInList($value)
	{
		$this->numPagesToShowInList = $value;
	}

	/**
	* @return returns value of variable $pageUpperBound
	* @desc getPageUpperBound : Getting value for variable $pageUpperBound
	*/
	function getPageUpperBound ()
	{
		return $this->pageUpperBound ;
	}

	/**
	* @param param : value to be saved in variable $pageUpperBound
	* @desc setPageUpperBound : Setting value for $pageUpperBound
	*/
	function setPageUpperBound ($value)
	{
		$this->pageUpperBound = $value;
	}

	/**
	* @return returns value of variable $pageLowerBound
	* @desc getPageLowerBound : Getting value for variable $pageLowerBound
	*/
	function getPageLowerBound()
	{
		return $this->pageLowerBound;
	}

	/**
	* @param param : value to be saved in variable $pageLowerBound
	* @desc setPageLowerBound : Setting value for $pageLowerBound
	*/
	function setPageLowerBound($value)
	{
		$this->pageLowerBound = $value;
	}



	function resultsPager($startRow,$rowsPerPage,$totalRows,$linkToGoTo)
	{

		$this->setNumPagesToShowInList(5);

		// to avoid zeros...
		$startRow = $startRow + 1;

		$this->setStartRow($startRow);
		$this->setRowsPerPage($rowsPerPage);
		$this->setTotalRows($totalRows);
		$this->setLinkToGo($linkToGoTo);

		$this->findTotalNumberOfPages();
		$this->findCurrentPage();
		$this->findLowerAndUpperBound();

	}

	function findTotalNumberOfPages()
	{

		$totalNumberOfPages = ceil($this->getTotalRows()/$this->getRowsPerPage());
		$this->setTotalPages($totalNumberOfPages);

	}

	function findCurrentPage()
	{
		$currentPage = ceil($this->getStartRow()/$this->getRowsPerPage());
		$this->setCurrentPage($currentPage);

		if ($this->getTotalRows()<=0) { $this->setCurrentPage(0); }


	}

	function findLowerAndUpperBound()
	{

		$pageLowerBound = $this->getCurrentPage() - ($this->getCurrentPage() % $this->getNumPagesToShowInList());

		if ($this->getTotalPages() > $this->getNumPagesToShowInList())
		{
			$pageUpperBound = $pageLowerBound + $this->getNumPagesToShowInList();

			// If Upper Bound > Total Number of Pages, make Upper Bound the Total Pages
			if ($pageUpperBound>=$this->getTotalPages() ) { $pageUpperBound = $this->getTotalPages() ; }

		}
		else{

			$pageUpperBound = $this->getTotalPages() ;
		}

		$pageUpperBound = round($pageUpperBound);
		$pageLowerBound = round($pageLowerBound) ;

		$this->setPageLowerBound($pageLowerBound);
		$this->setPageUpperBound($pageUpperBound);

	}


	function buildPager()
	{

		$linkToGoTo = $this->getLinkToGo();

		/*
		if ($this->getPageLowerBound()!=1) { echo "<a href=\"$linkToGoTo".$delimeter."s=$previousStart&cp=$previousUpperBound\"> <b> <<< </b> </a> &nbsp;"; }


		for ($a=$this->getPageLowerBound(); $a<$this->getPageUpperBound(); $a++)
		{

		echo "X ".$a."...";
		}

		if (($this->getPageUpperBound()<$this->getTotalPages()) && ($this->getTotalPages()>$this->getNumPagesToShowInList()))
		{
		if ($this->getTotalPages()>$this->getNumPagesToShowInList())
		{
		echo "&nbsp;<a href=\"$scriptToGo".$delimeter."s=$nextStart&cp=$nextLowerBound\"> <b> >>> </b> </a>";
		}

		}

		*/


		$currentPage = $this->getCurrentPage();

		if ($this->getTotalPages()>0)
		{
			echo "<b>Click on the Page numbers to view page --> </b> ";


			for ($a=0;$a < $this->getTotalPages() ; $a++)
			{
				$thisNextStartPage = $a * $this->getRowsPerPage();

				$pageToShow = $a + 1;
				if ($pageToShow!=$this->getCurrentPage())
				{

					echo "<a href=\"".$this->getLinkToGo()."&s=".$thisNextStartPage."\"> ".$pageToShow." </a> - \n";
				}
				else
				{
					echo "<b><font color=red> $pageToShow </font></b> - ";
				}
			}

			echo "<br>";
			echo "Showing page ".$this->getCurrentPage()." of ".$this->getTotalPages()." pages.";
		}


	}

}


?>