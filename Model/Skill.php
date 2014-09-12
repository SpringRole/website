<?php

    namespace Model;

    use \Everyman\Neo4j\Node;

    class Skill extends Entity {

        protected $id;
        protected $name;
        protected $parentId;
        protected $depth;
        
        protected $node = null;
        protected $parentNode;
        protected $children = array();

        protected $jsonFormattedData;

        public function __construct(Node $node = null){
            parent::__construct();
            if ($node){
                $this->setNode($node);
                $this->hydrateFromNode();
            }
        }

        /**
         * Hydrate all object properties from the node
         */
        public function hydrateFromNode(){

            $props = $this->node->getProperties();

            foreach($props as $prop => $value){
                $methodName = "set" . ucfirst($prop);
                if (method_exists($this, $methodName)){
                    $this->$methodName($value);
                }
            }

            $this->setId( $this->node->getId() );

            return $this;
        }

        /**
         * Set the node for an (empty) skill obj
         */
        public function setNode(Node $node){
            $this->node = $node;
        }

        /**
         * Sets all node properties from the object
         */
        public function generateNode(){

            $this->node = $this->client->makeNode();
            $this->node->setProperties(
                array(
                    "name" => $this->name,
                    "depth" => $this->depth
            ));

            return $this->node;
            
        }

        /**
         * Return the node for this entity, generates it if not present
         */
        public function getNode(){
            if ($this->node == null){
                $this->generateNode();
            }
            return $this->node;
        }


        public function getJsonData(){
            $data = array(
                "id" => $this->id,
                "name" => $this->name,
                "depth" => $this->depth,
                "parent" => $this->parentId
            );
            return $data;
        }

        
        /**
         * Gets the value of id.
         *
         * @return mixed
         */
        public function getId(){
            return $this->id;
        }

        /**
         * Sets the value of id.
         *
         * @param mixed $id the id
         *
         * @return self
         */
        public function setId($id){
            $this->id = $id;
            $this->getNode()->setProperty("id", $id);
            return $this;
        }

        /**
         * Gets the value of name.
         *
         * @return mixed
         */
        public function getName(){
            return $this->name;
        }

        /**
         * Sets the value of name.
         *
         * @param mixed $name the name
         *
         * @return self
         */
        public function setName($name){
            $this->name = $name;
            $this->getNode()->setProperty("name", $name);

            return $this;
        }

        /**
         * Gets the value of parentId.
         *
         * @return mixed
         */
        public function getParentId(){
            return $this->parentId;
        }

        /**
         * Sets the value of parentId.
         *
         * @param mixed $parentId the parent id
         *
         * @return self
         */
        public function setParentId($parentId){
            $this->parentId = $parentId;

            return $this;
        }
    
        /**
         * Gets the value of parentNode.
         *
         * @return mixed
         */
        public function getParentNode(){
            return $this->parentNode;
        }

        /**
         * Sets the value of parentNode.
         *
         * @param mixed $parentNode the parent node
         *
         * @return self
         */
        public function setParentNode($parentNode){
            $this->parentNode = $parentNode;

            return $this;
        }

        /**
         * Gets the value of children.
         *
         * @return mixed
         */
        public function getChildren(){
            return $this->children;
        }

        /**
         * Sets the value of children.
         *
         * @param mixed $children the children
         *
         * @return self
         */
        public function setChildren($children){
            $this->children = $children;

            return $this;
        }
        
        /**
         * Gets the value of depth.
         *
         * @return mixed
         */
        public function getDepth()
        {
            return $this->depth;
        }

        /**
         * Sets the value of depth.
         *
         * @param mixed $depth the depth
         *
         * @return self
         */
        public function setDepth($depth)
        {
            $this->depth = $depth;

            return $this;
        }

    }