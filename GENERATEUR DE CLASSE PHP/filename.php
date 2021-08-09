 class Atout_accueil{ <br><span style="margin-left: 15px;"> private $accueil_id;</span><br><span style="margin-left: 15px;"> private $accueil_image;</span><br><span style="margin-left: 15px;"> private $accueil_statut;</span><br><span style="margin-left: 15px;"> private $accueil_transition;</span><br><span style="margin-left: 15px;"> private $accueil_texte1;</span><br><span style="margin-left: 15px;"> private $accueil_texte2;</span><br><br><span style="margin-left: 25px;">public function __construct(array $donnees){ </span><br><span style="margin-left: 25px;">$this->hydrate($donnees); </span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function hydrate(array $donnees){</span><br><span style="margin-left: 35px;">foreach($donnees as $key => $value){</span><br><span style="margin-left: 45px;">$method = 'set'.ucfirst($key);</span><br><span style="margin-left: 45px;">if(method_exists($this, $method))</span><br><span style="margin-left: 45px;">{</span><br><span style="margin-left: 45px;">$this->$method($value);</span></span><br><span style="margin-left: 45px;">}</span><br><span style="margin-left: 35px;">}</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function getAccueil_id(){ </span><br><span style="margin-left: 35px;">return $this->accueil_id;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function getAccueil_image(){ </span><br><span style="margin-left: 35px;">return $this->accueil_image;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function getAccueil_statut(){ </span><br><span style="margin-left: 35px;">return $this->accueil_statut;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function getAccueil_transition(){ </span><br><span style="margin-left: 35px;">return $this->accueil_transition;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function getAccueil_texte1(){ </span><br><span style="margin-left: 35px;">return $this->accueil_texte1;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function getAccueil_texte2(){ </span><br><span style="margin-left: 35px;">return $this->accueil_texte2;</span><br><span style="margin-left: 25px;">}</span><br><br><br><span style="margin-left: 25px;">public function setAccueil_id($accueil_id){ </span><br><span style="margin-left: 35px;"> $this->accueil_id=$accueil_id;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function setAccueil_image($accueil_image){ </span><br><span style="margin-left: 35px;"> $this->accueil_image=$accueil_image;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function setAccueil_statut($accueil_statut){ </span><br><span style="margin-left: 35px;"> $this->accueil_statut=$accueil_statut;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function setAccueil_transition($accueil_transition){ </span><br><span style="margin-left: 35px;"> $this->accueil_transition=$accueil_transition;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function setAccueil_texte1($accueil_texte1){ </span><br><span style="margin-left: 35px;"> $this->accueil_texte1=$accueil_texte1;</span><br><span style="margin-left: 25px;">}</span><br><br><span style="margin-left: 25px;">public function setAccueil_texte2($accueil_texte2){ </span><br><span style="margin-left: 35px;"> $this->accueil_texte2=$accueil_texte2;</span><br><span style="margin-left: 25px;">}</span><br><br>}