<?php 

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 01, February 2016
    doorGets it's free PHP Open Source CMS PHP & MySQL
    Copyright (C) 2012 - 2015 By Mounir R'Quiba -> Crazy PHP Lover
    
/*******************************************************************************

    Website : http://www.doorgets.com
    Contact : http://www.doorgets.com/t/en/?contact
    
/*******************************************************************************
    -= One life, One code =-
/*******************************************************************************
    
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
******************************************************************************
******************************************************************************/

class DgNewsletterEmaillingGroupeQuery extends AbstractQuery 
{

	protected $_table = '_dg_newsletter_emailling_groupe';
    
    protected $_className = 'DgNewsletterEmaillingGroupe';

    public function __construct(&$doorGets = null) {
        parent::__construct($doorGets);
    }

	protected $_pk = 'id';

	public function _getPk() {
		return $this->_pk;
	} 

	public function findByPK($Id) {
		$this->_findBy['Id'] =  $Id;
		$this->_load();
		return $this;
	} 
		
	public function findById($Id) {
		$this->_findBy['Id'] =  $Id;
		$this->_load();
		return $this;
	} 
		
	public function findRangeById($from,$to) {
		$this->_findRangeBy['Id'] =  array(
			'from' => $from,
			'to'   => $to
		);
		$this->_load();
		return $this;
	} 


	public function findGreaterThanById($int) {
		$this->_findGreaterThanBy['Id'] = $int;
		$this->_load();
		return $this;
	} 


	public function findLessThanById($int) {
		$this->_findLessThanBy['Id'] = $int;
		$this->_load();
		return $this;
	} 
		
	public function findByTitre($Titre) {
		$this->_findBy['Titre'] =  $Titre;
		$this->_load();
		return $this;
	} 
		
	public function findByDescription($Description) {
		$this->_findBy['Description'] =  $Description;
		$this->_load();
		return $this;
	} 
		
	public function findByDateCreation($DateCreation) {
		$this->_findBy['DateCreation'] =  $DateCreation;
		$this->_load();
		return $this;
	} 
		
	public function findRangeByDateCreation($from,$to) {
		$this->_findRangeBy['DateCreation'] =  array(
			'from' => $from,
			'to'   => $to
		);
		$this->_load();
		return $this;
	} 


	public function findGreaterThanByDateCreation($int) {
		$this->_findGreaterThanBy['DateCreation'] = $int;
		$this->_load();
		return $this;
	} 


	public function findLessThanByDateCreation($int) {
		$this->_findLessThanBy['DateCreation'] = $int;
		$this->_load();
		return $this;
	} 
		
	public function findByDateModification($DateModification) {
		$this->_findBy['DateModification'] =  $DateModification;
		$this->_load();
		return $this;
	} 
		
	public function findRangeByDateModification($from,$to) {
		$this->_findRangeBy['DateModification'] =  array(
			'from' => $from,
			'to'   => $to
		);
		$this->_load();
		return $this;
	} 


	public function findGreaterThanByDateModification($int) {
		$this->_findGreaterThanBy['DateModification'] = $int;
		$this->_load();
		return $this;
	} 


	public function findLessThanByDateModification($int) {
		$this->_findLessThanBy['DateModification'] = $int;
		$this->_load();
		return $this;
	} 

		
	public function findOneById($Id) {
		$this->_findOneBy['Id'] =  $Id;
		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByTitre($Titre) {
		$this->_findOneBy['Titre'] =  $Titre;
		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByDescription($Description) {
		$this->_findOneBy['Description'] =  $Description;
		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByDateCreation($DateCreation) {
		$this->_findOneBy['DateCreation'] =  $DateCreation;
		$this->_load();
		return $this->_result;
	} 
		
	public function findOneByDateModification($DateModification) {
		$this->_findOneBy['DateModification'] =  $DateModification;
		$this->_load();
		return $this->_result;
	} 

		
	public function findByLikeId($Id) {
		$this->_findByLike['Id'] =  $Id;
		$this->_load();
		return $this;
	} 
		
	public function findByLikeTitre($Titre) {
		$this->_findByLike['Titre'] =  $Titre;
		$this->_load();
		return $this;
	} 
		
	public function findByLikeDescription($Description) {
		$this->_findByLike['Description'] =  $Description;
		$this->_load();
		return $this;
	} 
		
	public function findByLikeDateCreation($DateCreation) {
		$this->_findByLike['DateCreation'] =  $DateCreation;
		$this->_load();
		return $this;
	} 
		
	public function findByLikeDateModification($DateModification) {
		$this->_findByLike['DateModification'] =  $DateModification;
		$this->_load();
		return $this;
	} 

		
	public function filterById($Id, $condition = 'AND') {
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Id',$Id,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeById($from,$to) {
		$this->_filterRangeBy['Id'] =  array(
			'from' => $from,
			'to'   => $to
		);
		$this->_load();
		return $this;
	} 


	public function filterGreaterThanById($int) {
		$this->_filterGreaterThanBy['Id'] = $int;
		$this->_load();
		return $this;
	} 


	public function filterLessThanById($int) {
		$this->_filterLessThanBy['Id'] = $int;
		$this->_load();
		return $this;
	} 
		
	public function filterByTitre($Titre, $condition = 'AND') {
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Titre',$Titre,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByDescription($Description, $condition = 'AND') {
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('Description',$Description,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterByDateCreation($DateCreation, $condition = 'AND') {
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('DateCreation',$DateCreation,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByDateCreation($from,$to) {
		$this->_filterRangeBy['DateCreation'] =  array(
			'from' => $from,
			'to'   => $to
		);
		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByDateCreation($int) {
		$this->_filterGreaterThanBy['DateCreation'] = $int;
		$this->_load();
		return $this;
	} 


	public function filterLessThanByDateCreation($int) {
		$this->_filterLessThanBy['DateCreation'] = $int;
		$this->_load();
		return $this;
	} 
		
	public function filterByDateModification($DateModification, $condition = 'AND') {
		$_condition = $this->isAndOr($condition);
		$this->loadFilterBy('DateModification',$DateModification,$_condition);

		$this->_load();
		return $this;
	} 
		
	public function filterRangeByDateModification($from,$to) {
		$this->_filterRangeBy['DateModification'] =  array(
			'from' => $from,
			'to'   => $to
		);
		$this->_load();
		return $this;
	} 


	public function filterGreaterThanByDateModification($int) {
		$this->_filterGreaterThanBy['DateModification'] = $int;
		$this->_load();
		return $this;
	} 


	public function filterLessThanByDateModification($int) {
		$this->_filterLessThanBy['DateModification'] = $int;
		$this->_load();
		return $this;
	} 

		
	public function filterLikeById($Id) {
		$this->_filterLikeBy['Id'] =  $Id;
		$this->_load();
		return $this;
	} 
		
	public function filterLikeByTitre($Titre) {
		$this->_filterLikeBy['Titre'] =  $Titre;
		$this->_load();
		return $this;
	} 
		
	public function filterLikeByDescription($Description) {
		$this->_filterLikeBy['Description'] =  $Description;
		$this->_load();
		return $this;
	} 
		
	public function filterLikeByDateCreation($DateCreation) {
		$this->_filterLikeBy['DateCreation'] =  $DateCreation;
		$this->_load();
		return $this;
	} 
		
	public function filterLikeByDateModification($DateModification) {
		$this->_filterLikeBy['DateModification'] =  $DateModification;
		$this->_load();
		return $this;
	} 

		
	public function orderById($direction = 'ASC') {
		$this->loadDirection('id',$direction);
		return $this;
	} 
		
	public function orderByTitre($direction = 'ASC') {
		$this->loadDirection('titre',$direction);
		return $this;
	} 
		
	public function orderByDescription($direction = 'ASC') {
		$this->loadDirection('description',$direction);
		return $this;
	} 
		
	public function orderByDateCreation($direction = 'ASC') {
		$this->loadDirection('date_creation',$direction);
		return $this;
	} 
		
	public function orderByDateModification($direction = 'ASC') {
		$this->loadDirection('date_modification',$direction);
		return $this;
	} 


	public function _getMap() { 
		$parentMap = parent::_getMap();
		return array_merge($parentMap, array(            
		    'Id' =>  'id',            
		    'Titre' =>  'titre',            
		    'Description' =>  'description',            
		    'DateCreation' =>  'date_creation',            
		    'DateModification' =>  'date_modification',		
		));
	} 


}