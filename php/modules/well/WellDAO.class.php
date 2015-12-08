<?php
class WellDAO extends CoreModelAbstractDAO {
	protected function getTableName() {
		return 'well';
	}

	protected function getFields() {
		return array(
			'id' => null,
			'siteId' => null,
			'wellName' => null,
                        'wellDescription' => null,
                        'wellUWI' => null,
                        'wellAPI' => null,
                        'wellSlot' => null,
                        'wellTedit' => null,
                        'wellType' => null,
                        'wellTrajectory' => null,
                        'well3DTrajectory' => null,
                        'wellTrajectoryVariant' => null,
                        'A' => null,
                        'A1' => null,
                        'A2' => null,
                        'A3' => null,
                        'A4' => null,
                    
                        'H' => null,
                        'H1' => null,
                        'H2' => null,
                        'H3' => null,
                        'H4' => null,
                    
                        'L' => null,
                        'L1' => null,
                        'L2' => null,
                        'L3' => null,
                        'L4' => null,
                        'L5' => null,
                    
                        'R' => null,
                        'R1' => null,
                        'R2' => null,
                        'R3' => null,
                        'R4' => null,
                    
                        'alfa' => null,
                        'alfa1' => null,
                        'alfa2' => null,
                        'alfa3' => null,
                        'alfa4' => null,
                    
                        'delta' => null,
                        'delta1' => null,
                        'delta2' => null,
                        'delta3' => null,
                        'delta4' => null,
                    
                        'DLS' => null,
                        'DLS1' => null,
                        'DLS2' => null,
                        'DLS3' => null,
                        'DLS4' => null,
                        
                        'Q' => null,
                        'ro' => null,
                        
                        'tvectorX' => null,
                        'tvectorY' => null,
                        'tvectorZ' => null,
                    
                        'vsection' =>null,
                    
                        'step' => null,
                    
                        'color' => null,
                    
                        'azimuth' => null
                        
		);
	}

	protected function getManyToManyRelations()	{
		return array();
	}

	protected function hasNumerousDirectlyRelatedRecords(array &$record) {

	}

	protected function getDirectlyRelatedRecords(&$record) {
		return array();
	}

	protected function getDefaultOrderBySQL() {
		return 'wellName ASC, id';
	}

	public function getListForAutoSuggest($query, $limit) {
		$db = CoreServices::get('db');
		$queryConditionSQL = '0';
		$parts = explode(' ', $query);
		$names = array();
		for ($i = 0; $i < min(2, sizeof($parts)); $i++) {
			$names[] = $db->prepareInputValue('%' . $parts[$i] . '%');
		}
		foreach (array('siteName') as $colName) {
			foreach ($names as $nameSQL) {
				$queryConditionSQL .= '
					OR ' . $colName . ' LIKE ' . $nameSQL;
			}
		}
		$sql = '
			SELECT *
			FROM well
			WHERE
				(' . $queryConditionSQL . ')
			ORDER BY
				wellName';
		if ($limit) {
			$sql .= '
			LIMIT 0, ' . $db->prepareInputValue($limit);
		}
		return $db->getRows($sql);
	}
        
        public function getWellBySiteIdAndUserId($siteId,$userId){
		$db = CoreServices2::getDB();
		$sql = '
			SELECT
				well.id , wellName, projectId, companyId, projectName, siteName
			FROM
				well   
                        LEFT JOIN 
                                site on (siteId = site.id)
                        LEFT JOIN 
                                project on (projectId = project.id)
                        LEFT JOIN 
                                company ON (companyId = company.id)
			WHERE
				siteId = ' . $db->prepareInputValue($siteId) .'
                        AND userId = ' . $db->prepareInputValue($userId) .' 
                        ORDER BY siteName';		
		return $db->getRows($sql);
        }
        
        public function getWellBySiteId($siteId){
		$db = CoreServices2::getDB();
		$sql = '
			SELECT
				*, well.id as id 
			FROM
				well   
                        LEFT JOIN 
                                site on (siteId = site.id)
                        LEFT JOIN 
                                project on (projectId = project.id)
                        LEFT JOIN 
                                company ON (companyId = company.id)
			WHERE
				siteId = ' . $db->prepareInputValue($siteId) .'
                         
                        ORDER BY siteName';		
		return $db->getRows($sql);
        }
        
        public function getRecordPath($recordId){
                $db = CoreServices2::getDB();
		$sql = '
			SELECT
				companyId, companyName, projectId, projectName, siteId ,siteName, well.id as wellId, wellName
			FROM
				well   
                        LEFT JOIN 
                                site on (well.siteId = site.id)
                        LEFT JOIN 
                                project on (projectId = project.id)
                        LEFT JOIN 
                                company ON (companyId = company.id)
			WHERE
				well.id = ' . $db->prepareInputValue($recordId) .'
                        LIMIT 0,1';
                
		return $db->getRow($sql);
        }
        
        public function getWellOwnerUserId($wellId){
                $db = CoreServices2::getDB();
		$sql = '
			SELECT
				userId
			FROM
				well   
                        LEFT JOIN 
                                site on (well.siteId = site.id)
                        LEFT JOIN 
                                project on (projectId = project.id)
                        LEFT JOIN 
                                company ON (companyId = company.id)
			WHERE
				well.id = ' . $db->prepareInputValue($wellId) .'
                        LIMIT 0,1';
                return $db->getRow($sql);
        }
        
        

}
?>