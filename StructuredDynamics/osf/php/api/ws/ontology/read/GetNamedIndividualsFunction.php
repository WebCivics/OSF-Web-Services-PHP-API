<?php

  /*! @ingroup OSFPHPAPIWebServices OSF PHP API Web Services */
  //@{

  /*! @file \StructuredDynamics\osf\php\api\ws\ontology\read\GetNamedIndividualsFunction.php
      @brief GetNamedIndividualsFunction class description
   */

  namespace StructuredDynamics\osf\php\api\ws\ontology\read;  

   
 /**
  * Class used to define the parameters to use send a "getNamedIndividuals" call 
  * to the Ontology: Read web service endpoint.
  *       
  * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
  * 
  * @author Frederick Giasson, Structured Dynamics LLC.
  */
  class GetNamedIndividualsFunction extends \StructuredDynamics\osf\php\api\framework\OntologyFunctionCall
  {
    function __construct()
    {
      // Default values
      $this->getNamedIndividualsUris();
      $this->allNamedIndividuals();
      
    }
    
    /**
    * Get all the named individuals belonging to that class URI
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function classUri($uri)
    {
      $this->params["classuri"] = urlencode($uri);
      
      return($this);
    }    
    
    /**
    * Get a list of URIs that refers to the named individuals described in this ontology. 
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function getNamedIndividualsUris()
    {
      $this->params["mode"] = "uris";
      
      return($this);
    }
    
    /**
    * Get the list of named individuals description for the named individuals described in this ontology.
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function getNamedIndividualsDescriptions()
    {
      $this->params["mode"] = "descriptions";
      
      return($this);
    }
    
    
    /**
    * Get the list of named individuals description described in this ontology. This list of named 
    * individuals has been optimized for list controls. Only the types and the prefLabel of the 
    * named individual has been added to its description. 
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function getNamedIndividualsList()
    {
      $this->params["mode"] = "list";
      
      return($this);
    }    
    
    /**
    * The number of results the requester wants in the resultset.
    * 
    * @param mixed $limit The number of results the requester wants in the resultset. 
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function limit($limit)
    {
      $this->params["limit"] = $limit;
      
      return($this);
    }    
    
    /**
    * Where the results to return starts in the complete list of results. This is 
    * normally used in conjunction with the limit parameter to paginate the complete 
    * list of named individuals. 
    * 
    * @param mixed $offset Where the results to return starts in the complete list of results.
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function offset($offset)
    {
      $this->params["offset"] = $offset;
      
      return($this);
    } 
    
    /**
    * Get all the named individuals that belong to the class referenced by the classuri 
    * parameter, and all the named individuals that belongs to all the super-classes 
    * of that target class. 
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function directNamedIndividuals()
    {
      $this->params["direct"] = "True";
      
      return($this);
    }    

    /**
    *   Get all the named individuals that belong directly to 
    * that class referenced by the classuri parameter. 
    * 
    * @see http://wiki.opensemanticframework.org/index.php/Ontology_Read#getNamedIndividuals
    * 
    * @author Frederick Giasson, Structured Dynamics LLC.
    */
    public function allNamedIndividuals()
    {
      $this->params["direct"] = "False";
      
      return($this);
    }         
  }     
 
//@}    
?>