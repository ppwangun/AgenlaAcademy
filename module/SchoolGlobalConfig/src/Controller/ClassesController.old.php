<?php namespace SchoolGlobalConfig\Controller;${"G\x4cOBA\x4c\x53"}["t\x76\x77u\x6cu\x61"]="\x6d\x65\x73\x73\x61\x67\x65";${"\x47LOBALS"}["\x62\x72\x7a\x63\x65x\x6c\x73\x73\x66\x78"]="de\x67ree";${"\x47L\x4f\x42A\x4cS"}["vy\x68\x78\x75\x78\x77h\x65"]="\x63yc\x6c\x65";${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6a\x70\x6bj\x6b\x75"]="\x68y\x64\x72\x61\x74\x6f\x72";${"\x47L\x4f\x42\x41\x4c\x53"}["\x78\x67\x63\x6a\x7a\x6a\x69\x71\x6c\x74\x65o"]="\x73c\x68\x6f\x6f\x6c";${"\x47L\x4fBA\x4c\x53"}["\x75\x72\x78\x78\x6c\x73\x70\x64\x69\x65l"]="f\x61\x63\x75\x6c\x74i\x65\x73";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x78\x68\x72\x72\x66\x68\x65\x6f\x71s\x67"]="e";${"G\x4c\x4fB\x41\x4c\x53"}["f\x62\x78\x72zo\x62\x78\x67\x6f"]="\x64a\x74\x61";${"G\x4cO\x42\x41\x4cS"}["\x78\x6f\x69\x73f\x6cu\x79\x6c\x64i\x6f"]="\x76al\x75\x65";${"\x47\x4c\x4f\x42ALS"}["\x63\x75q\x76\x6dw\x79"]="k\x65y";${"G\x4cO\x42\x41\x4c\x53"}["\x75\x6c\x6eq\x7ayftb\x67\x76j"]="\x63\x6c\x61\x73s\x65s";${"\x47L\x4f\x42\x41L\x53"}["vpe\x64\x64\x6ds"]="use\x72Id";${"GL\x4f\x42\x41L\x53"}["\x6ejy\x67\x66ui\x6e"]="\x71\x75e\x72\x79";${"\x47\x4c\x4f\x42\x41LS"}["s\x69\x6ckc\x6emg\x65"]="\x75s\x65\x72";${"\x47\x4cO\x42A\x4c\x53"}["ox\x77yh\x71\x78\x77\x61\x6e"]="cla\x73\x73\x65";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x78or\x6a\x63\x61\x61\x6d\x63"]="\x69\x64";use Doctrine\ORM\EntityRepository;use Doctrine\ORM\Query\ResultSetMapping;use Doctrine\DBAL\Types\Type;use Laminas\Mvc\Controller\AbstractRestfulController;use Laminas\View\Model\JsonModel;use Laminas\Hydrator\ReflectionHydrator;use Application\Entity\Degree;use Application\Entity\TrainingCurriculum;use Application\Entity\User;use Application\Entity\ClassOfStudy;use Application\Entity\ClassListView;use Application\Entity\ClassListByUserView;use Laminas\Hydrator\Aggregate\AggregateHydrator;class ClassesController extends AbstractRestfulController{private$entityManager;private$sessionContainer;public function __construct($entityManager,$sessionContainer){${"GLOBA\x4c\x53"}["\x72w\x79\x75z\x66\x72"]="\x73\x65\x73\x73i\x6f\x6eC\x6f\x6e\x74\x61\x69\x6e\x65r";${"\x47L\x4fB\x41\x4cS"}["\x64\x75\x73\x65\x62\x62\x69f\x74"]="\x65n\x74\x69\x74y\x4dan\x61ge\x72";$this->entityManager=${${"\x47\x4c\x4f\x42\x41L\x53"}["dus\x65\x62\x62\x69f\x74"]};$this->sessionContainer=${${"\x47LOBA\x4cS"}["\x72\x77y\x75z\x66\x72"]};}public function get($id){$baxijqbgock="\x69d";$amvili="\x75\x73e\x72\x49d";$ybbitjy="\x75\x73\x65r";$ikeyipf="\x75\x73\x65r\x49\x64";if(is_numeric(${$baxijqbgock})){${"\x47L\x4fBA\x4c\x53"}["v\x72m\x69\x78\x78\x71\x76"]="c\x6c\x61\x73se";${"G\x4cO\x42\x41\x4c\x53"}["r\x64\x66\x69\x6a\x6fyp\x62f"]="\x68ydr\x61\x74\x6f\x72";$bjkysyaxg="\x64a\x74a";$uogmfvqv="cl\x61\x73se";${"\x47L\x4fB\x41L\x53"}["\x6c\x72\x72\x6er\x78r\x78\x71r\x63"]="\x63\x6c\x61\x73se";${${"\x47\x4cO\x42AL\x53"}["\x6cr\x72\x6e\x72\x78r\x78\x71\x72\x63"]}=$this->entityManager->getRepository(ClassListView::class)->find(${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x78\x6frj\x63\x61am\x63"]});$oppmuaqu="\x64a\x74\x61";${${"GL\x4fB\x41\x4c\x53"}["rd\x66\x69\x6aoy\x70\x62\x66"]}=new ReflectionHydrator();${$bjkysyaxg}=$hydrator->extract(${$uogmfvqv});${${"GL\x4f\x42A\x4c\x53"}["\x76\x72\x6d\x69\x78\x78\x71\x76"]}=${$oppmuaqu};return new JsonModel([${${"\x47\x4c\x4f\x42\x41LS"}["\x6f\x78\x77\x79hq\x78w\x61\x6e"]}]);}${$ikeyipf}=$this->sessionContainer->userId;${${"G\x4cO\x42\x41LS"}["\x73\x69\x6c\x6b\x63\x6e\x6d\x67\x65"]}=$this->entityManager->getRepository(User::class)->find(${$amvili});if($this->access("\x61l\x6c\x2e\x63\x6c\x61\x73\x73\x65\x73\x2e\x76iew",["\x75\x73\x65r"=>${${"\x47\x4c\x4f\x42\x41L\x53"}["\x73\x69lk\x63\x6emg\x65"]}])||$this->access("\x67lobal.\x73\x79s\x74\x65m\x2ea\x64m\x69\x6e",["\x75se\x72"=>${$ybbitjy}])){${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6ejy\x67\x66\x75\x69n"]}=$this->entityManager->createQuery("\x53\x45\x4cE\x43\x54 \x63.id,\x63.cod\x65,c\x2ena\x6d\x65,\x63\x2e\x73t\x75dy\x4ceve\x6c,\x63.\x69sEn\x64Cy\x63\x6ce,c\x2e\x69\x73E\x6e\x64DegreeT\x72ai\x6e\x69\x6eg FR\x4fM\x20\x41\x70\x70l\x69ca\x74ion\\En\x74\x69t\x79\\\x43\x6ca\x73\x73L\x69\x73\x74Vie\x77 c"." \x57\x48\x45R\x45 \x63\x2ec\x6fde\x20\x4c\x49\x4b\x45 :cod\x65");$query->setParameter("\x63ode","%".${${"\x47\x4c\x4fB\x41L\x53"}["\x78\x6frjc\x61\x61m\x63"]}."\x25");${${"\x47L\x4f\x42\x41L\x53"}["\x6fxw\x79\x68q\x78w\x61\x6e"]}=$query->getResult();}else{${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6ejyg\x66\x75\x69n"]}=$this->entityManager->createQuery("\x53EL\x45\x43\x54 \x63\x2e\x69d,c\x2e\x75serI\x64,\x63\x2e\x63\x6f\x64e,c\x2ena\x6de,\x63.s\x74\x75\x64\x79\x4cevel,c\x2e\x69sE\x6e\x64Cy\x63\x6ce,c.isE\x6edD\x65\x67\x72eeT\x72a\x69\x6e\x69n\x67\x20\x46\x52OM \x41\x70p\x6c\x69ca\x74\x69o\x6e\x5cEn\x74\x69\x74\x79\\C\x6c\x61\x73\x73\x4c\x69\x73tBy\x55\x73e\x72V\x69e\x77\x20c"." \x57\x48\x45RE\x20\x63\x2ec\x6f\x64\x65 \x4c\x49\x4bE\x20:\x63\x6fde \x41ND \x63.us\x65\x72\x49\x64 = :userId");$query->setParameter("c\x6fd\x65","\x25".${${"GL\x4fB\x41\x4c\x53"}["\x78o\x72j\x63aa\x6dc"]}."%");$query->setParameter("u\x73\x65r\x49d",${${"\x47L\x4fB\x41L\x53"}["\x76\x70\x65\x64\x64ms"]});${${"\x47L\x4f\x42\x41\x4c\x53"}["\x6f\x78\x77y\x68\x71xw\x61\x6e"]}=$query->getResult();}return new JsonModel([${${"G\x4cO\x42\x41L\x53"}["\x6f\x78\x77\x79\x68q\x78\x77a\x6e"]}]);}public function getList(){$this->entityManager->getConnection()->beginTransaction();try{${"\x47\x4cOB\x41L\x53"}["\x73\x79\x63\x6cx\x6dm\x6e"]="\x76\x61\x6c\x75\x65";$avldyxnxqqj="cla\x73s\x65\x73";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6f\x67q\x67\x64\x6a\x73\x67"]="\x63las\x73e\x73";${$avldyxnxqqj}=$this->entityManager->getRepository(ClassListView::class)->findAll();foreach(${${"\x47\x4cO\x42\x41\x4c\x53"}["u\x6c\x6eq\x7ay\x66\x74\x62\x67\x76j"]} as${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x63u\x71\x76mwy"]}=>${${"\x47L\x4f\x42\x41L\x53"}["\x73\x79cl\x78mm\x6e"]}){${"\x47\x4c\x4fBAL\x53"}["ml\x77\x6fkwi"]="h\x79\x64\x72a\x74\x6f\x72";${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x6d\x6cw\x6f\x6b\x77\x69"]}=new ReflectionHydrator();$yisbgwucy="\x64a\x74\x61";${$yisbgwucy}=$hydrator->extract(${${"G\x4c\x4f\x42AL\x53"}["xoi\x73\x66\x6c\x75\x79l\x64i\x6f"]});$fsdspkrk="\x6b\x65y";${${"G\x4c\x4f\x42A\x4c\x53"}["\x75lnq\x7a\x79\x66\x74b\x67\x76j"]}[${$fsdspkrk}]=${${"G\x4c\x4fB\x41\x4cS"}["\x66\x62xrz\x6f\x62\x78\x67\x6f"]};}$this->entityManager->getConnection()->commit();return new JsonModel([${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6f\x67\x71g\x64js\x67"]}]);}catch(Exception$e){$this->entityManager->getConnection()->rollBack();throw${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x78hrr\x66\x68\x65\x6f\x71\x73\x67"]};}}public function getFaculty($school){$vritzngwhhe="\x66\x61\x63\x75l\x74i\x65s";$sbcgaivbtv="\x66a\x63\x75\x6ct\x69\x65\x73";${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x75\x72x\x78l\x73\x70d\x69\x65\x6c"]}=$this->entityManager->getRepository(Faculty::class)->findBySchool(${${"\x47\x4c\x4f\x42A\x4cS"}["x\x67c\x6azj\x69\x71\x6c\x74e\x6f"]});foreach(${$vritzngwhhe} as${${"\x47\x4c\x4f\x42\x41L\x53"}["\x63\x75q\x76\x6dw\x79"]}=>${${"\x47\x4cO\x42\x41\x4c\x53"}["x\x6f\x69s\x66l\x75\x79\x6cd\x69\x6f"]}){${"\x47\x4cO\x42\x41L\x53"}["\x71\x6c\x67\x67\x76q\x64\x7a"]="d\x61t\x61";$qvbmmyq="\x64ata";$xwcztikv="v\x61l\x75\x65";$vqjcpldcqc="\x66\x61\x63\x75\x6c\x74i\x65s";${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6apkj\x6b\x75"]}=new ReflectionHydrator();${${"G\x4cO\x42\x41LS"}["\x71\x6c\x67g\x76\x71\x64z"]}=$hydrator->extract(${$xwcztikv});${$vqjcpldcqc}[${${"\x47L\x4f\x42\x41\x4c\x53"}["\x63\x75q\x76\x6dw\x79"]}]=${$qvbmmyq};}return${$sbcgaivbtv};}public function create($data){$this->entityManager->getConnection()->beginTransaction();try{$eierbzwbffn="\x64a\x74a";${"\x47L\x4f\x42\x41\x4c\x53"}["\x7adjp\x6d\x66"]="\x64\x61t\x61";$jqnbieso="\x64\x65gr\x65\x65";$qlgnbtrqjkr="\x64a\x74\x61";$fvblgvpl="\x6d\x65\x73\x73ag\x65";$ntaqhbue="\x63\x6c\x61\x73\x73\x65";${$fvblgvpl}=false;${$ntaqhbue}=new ClassOfStudy();$classe->setName(${${"GL\x4f\x42ALS"}["\x66\x62xrzob\x78\x67\x6f"]}["\x6ea\x6de"]);$classe->setCode(${$eierbzwbffn}["c\x6fd\x65"]);$pkpgdgrnf="d\x61\x74\x61";$classe->setOption(${${"\x47L\x4f\x42A\x4c\x53"}["\x66\x62\x78\x72\x7ao\x62\x78g\x6f"]}["\x6fp\x74ion"]);$classe->setIsEndCycle(${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x66\x62\x78\x72\x7a\x6fb\x78g\x6f"]}["\x69\x73\x45\x6e\x64\x43\x79\x63\x6c\x65"]);$classe->setIsEndDegreeTraining(${$qlgnbtrqjkr}["\x69sE\x6e\x64\x44egr\x65eT\x72a\x69ni\x6eg"]);$classe->setStudyLevel(${${"GLO\x42\x41\x4c\x53"}["z\x64\x6a\x70\x6df"]}["\x73t\x75\x64yL\x65\x76\x65\x6c"]);if(!is_null(${$pkpgdgrnf}["cycl\x65Id"])){${${"GL\x4fB\x41\x4c\x53"}["v\x79\x68\x78\x75xwh\x65"]}=$this->entityManager->getRepository(TrainingCurriculum::class)->findOneById(${${"\x47L\x4fB\x41L\x53"}["\x66\x62\x78r\x7ao\x62\x78\x67\x6f"]}["\x63y\x63\x6c\x65Id"]);$classe->setCycle(${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x76\x79hxu\x78\x77\x68e"]});}${${"GL\x4f\x42\x41\x4c\x53"}["\x62\x72\x7ace\x78\x6cs\x73\x66x"]}=$this->entityManager->getRepository(Degree::class)->findOneById(${${"GLO\x42\x41\x4c\x53"}["fbx\x72zo\x62\x78g\x6f"]}["d\x65\x67\x72\x65\x65\x49d"]);$classe->setDegree(${$jqnbieso});$this->entityManager->persist(${${"\x47L\x4f\x42\x41\x4c\x53"}["\x6f\x78\x77\x79\x68q\x78\x77\x61\x6e"]});$this->entityManager->flush();${${"GLO\x42\x41\x4c\x53"}["\x74v\x77u\x6c\x75\x61"]}=true;$this->entityManager->getConnection()->commit();return new JsonModel([${${"G\x4c\x4f\x42A\x4c\x53"}["\x74\x76w\x75\x6c\x75\x61"]}]);}catch(Exception$e){$ywqsxhi="e";$this->entityManager->getConnection()->rollBack();throw${$ywqsxhi};}}public function delete($id){$this->entityManager->getConnection()->beginTransaction();try{${"\x47\x4c\x4f\x42\x41\x4c\x53"}["tdfy\x78\x64\x78u\x7atf\x64"]="\x63\x6c\x61\x73\x73\x65";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x67\x72\x68b\x78q\x7a"]="\x63las\x73e";${${"G\x4c\x4f\x42\x41L\x53"}["\x74d\x66\x79\x78\x64\x78\x75\x7at\x66\x64"]}=$this->entityManager->getRepository(ClassOfStudy::class)->findOneById(${${"\x47L\x4f\x42\x41\x4c\x53"}["\x78or\x6a\x63\x61\x61\x6dc"]});if(${${"\x47\x4cO\x42AL\x53"}["\x67r\x68\x62xq\x7a"]}){$this->entityManager->remove(${${"GL\x4f\x42\x41L\x53"}["\x6f\x78\x77\x79\x68q\x78\x77a\x6e"]});$this->entityManager->flush();$this->entityManager->getConnection()->commit();}}catch(Exception$e){$iilzdfypk="e";$this->entityManager->getConnection()->rollBack();throw${$iilzdfypk};}return new JsonModel([]);}public function update($id,$data){$this->entityManager->getConnection()->beginTransaction();try{${"\x47\x4cO\x42\x41\x4c\x53"}["ae\x66\x75x\x64\x73\x62\x69c"]="data";${"\x47\x4cO\x42\x41L\x53"}["\x64\x78\x78\x6cw\x66\x66\x72\x69\x67z"]="\x64\x61ta";$kogyivnq="da\x74\x61";$vhlfmrz="d\x61ta";${${"\x47L\x4f\x42\x41L\x53"}["\x64\x78\x78\x6c\x77\x66f\x72i\x67z"]}=${$vhlfmrz}["dat\x61"];$yscsqhtkbo="\x64\x61\x74\x61";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6f\x78wyh\x71\x78wa\x6e"]}=$this->entityManager->getRepository(ClassOfStudy::class)->findOneById(${${"GL\x4fB\x41\x4c\x53"}["\x78o\x72j\x63aa\x6d\x63"]});${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x69h\x68\x65\x6f\x73\x68"]="\x64a\x74\x61";$classe->setName(${$kogyivnq}["na\x6d\x65"]);$classe->setCode(${${"\x47\x4c\x4f\x42A\x4cS"}["\x69h\x68\x65\x6f\x73h"]}["\x63o\x64\x65"]);$classe->setOption(${${"GL\x4fBA\x4cS"}["\x66\x62\x78rz\x6f\x62\x78g\x6f"]}["op\x74\x69o\x6e"]);$classe->setStudyLevel(${${"GLO\x42A\x4c\x53"}["\x66\x62\x78\x72\x7a\x6f\x62\x78g\x6f"]}["\x73\x74\x75\x64\x79\x4c\x65\x76\x65\x6c"]);$classe->setIsEndCycle(${$yscsqhtkbo}["is\x45\x6edC\x79\x63\x6ce"]);$classe->setIsEndDegreeTraining(${${"\x47\x4c\x4fBA\x4c\x53"}["\x66\x62\x78\x72zo\x62\x78g\x6f"]}["\x69sE\x6e\x64\x44eg\x72\x65eTrai\x6eing"]);$classe->setDegree($this->entityManager->getRepository(Degree::class)->findOneById(${${"GLO\x42A\x4cS"}["fbxr\x7ao\x62\x78\x67\x6f"]}["d\x65g\x72\x65\x65\x49d"]));$classe->setCycle($this->entityManager->getRepository(TrainingCurriculum::class)->findOneById(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x61e\x66\x75x\x64s\x62i\x63"]}["cycl\x65\x49\x64"]));$this->entityManager->flush();$this->entityManager->getConnection()->commit();return new JsonModel([]);}catch(Exception$e){$sqxmnemhdx="\x65";$this->entityManager->getConnection()->rollBack();throw${$sqxmnemhdx};}}}
?>