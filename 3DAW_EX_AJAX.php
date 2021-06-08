<?php
/*MARCO ANTONIO RIBEIRO GAMA
 MAT 1810478300006*/

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nome = $_GET["uf"];
    $est_cap = '{"estados" : [{"estado" : "Rio de Janeiro" , "capital" : "Rio de Janeiro"},
                {"estado" : "Sao Paulo" , "capital" : "Sao Paulo"},
                {"estado" : "Minas Gerais" , "capital" : "Belo Horizonte"},
                {"estado" : "Espirito Santo" , "capital" : "Vitoria"},
                {"estado" : "Parana" , "capital" : "Curitiba"},
                {"estado" : "Rio Grande do Sul" , "capital" : "Porto Alegre"},
                {"estado" : "Santa Catarina" , "capital" : "Florianopolis"},
                {"estado" : "Mato Grosso" , "capital" : "Cuiba"},
                {"estado" : "Mato Grosso do Sul" , "capital" : "Campo Grande"},
                {"estado" : "Goias" , "capital" : "Goiania"},
                {"estado" : "Tocantins" , "capital" : "Palmas"},
                {"estado" : "Acre" , "capital" : "Rio Branco"},
                {"estado" : "Amazonas" , "capital" : "Manaus"},
                {"estado" : "Piaui" , "capital" : "Teresina"},
                {"estado" : "Para" , "capital" : "Belem"},
                {"estado" : "Rondonia" , "capital" : "Porto Velho"},
                {"estado" : "Roraima" , "capital" : "Boa Vista"},
                {"estado" : "Amapa" , "capital" : "Macapa"},
                {"estado" : "Bahia" , "capital" : "Salvador"},
                {"estado" : "Sergipe" , "capital" : "Aracaju"},
                {"estado" : "Alagoas" , "capital" : "Maceio"},
                {"estado" : "Pernambuco" , "capital" : "Recife"},
                {"estado" : "Paraiba" , "capital" : "Joao Pessoa"},
                {"estado" : "Rio Grande do Norte" , "capital" : "Natal"},
                {"estado" : "Ceara" , "capital" : "Fortaleza"},
                {"estado" : "Maranhao" , "capital" : "Sao Luiz"},
                {"estado" : "Brasilia" , "capital" : "Brasilia"}]}';
	$obj_est_cap = json_decode($est_cap,true);
	//var_dump($obj_est_cap = json_decode($est_cap,true));
	
	$uf = $_REQUEST["uf"];
	
	$estado = "";
	
	$capital = "";
	
	$tam = 0;
	foreach($obj_est_cap as $key => $est) {
        foreach($est as $k => $value){
            foreach($value as $chave => $val){
                if($val == $uf){
                        //echo $chave. "=>" .$val."\n";
                        $estado = $obj_est_cap["estados"][$tam / 2]["estado"]. "\n";
                        $capital = $obj_est_cap["estados"][$tam / 2]["capital"]. "\n";
                }else{
                    $tam += 1;
                    if($tam == 54 ){
                        echo("Nao existe\n");
                    }
                }
            }
        }
    }
    //echo '{"cidades":["rio de janeiro", "angra", "caxias"]}';
    //"{'cidade': 'rio de janeiro'}";
}
echo "Estado:". $estado ."Capital:". $capital;

?>