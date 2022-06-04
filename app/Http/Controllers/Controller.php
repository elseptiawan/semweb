<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        include(app_path() . '\functions\sparqllib.php');
        $test = "";
        if (request('negara')) {
            if (request('medali')){
                $negara = request('negara');
                $medali = request('medali');
                $data = sparql_get(
                "http://localhost:3030/sea-games",
                "
                PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                prefix : <http://www.semanticweb.org/asus/ontologies/2022/4/sea-games#>
                prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                prefix owl: <http://www.w3.org/2002/07/owl#>
                
                SELECT *
                WHERE {
                    ?x a owl:NamedIndividual .
                    ?x :negara ?negara .
                    ?x :medali ?medali .
                    ?x :2003 ?2003 .
                    ?x :2005 ?2005 .
                    ?x :2007 ?2007 .
                    ?x :2009 ?2009 .
                    ?x :2011 ?2011 .
                    ?x :2013 ?2013 .
                    ?x :2015 ?2015 .
                    ?x :2017 ?2017 .
                    ?x :2019 ?2019 .
                    ?x :2021 ?2021 .
                    ?x :total ?total .
                    FILTER (regex(?negara, '$negara', 'i') && regex(?medali, '$medali', 'i'))
                }
                    ORDER BY ASC (?medali)
                    "
                );
            }
            else{
                $negara = request('negara');
                $data = sparql_get(
                "http://localhost:3030/sea-games",
                "
                PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                prefix : <http://www.semanticweb.org/asus/ontologies/2022/4/sea-games#>
                prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                prefix owl: <http://www.w3.org/2002/07/owl#>
                
                SELECT *
                WHERE {
                    ?x a owl:NamedIndividual .
                    ?x :negara ?negara .
                    ?x :medali ?medali .
                    ?x :2003 ?2003 .
                    ?x :2005 ?2005 .
                    ?x :2007 ?2007 .
                    ?x :2009 ?2009 .
                    ?x :2011 ?2011 .
                    ?x :2013 ?2013 .
                    ?x :2015 ?2015 .
                    ?x :2017 ?2017 .
                    ?x :2019 ?2019 .
                    ?x :2021 ?2021 .
                    ?x :total ?total .
                    FILTER (regex(?negara, '$negara', 'i'))
                }
                    ORDER BY ASC (?medali)
                    "
                );
            }
            
        } else {
            if (request('medali')){
                $medali = request('medali');
                $data = sparql_get(
                "http://localhost:3030/sea-games",
                "
                PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                prefix : <http://www.semanticweb.org/asus/ontologies/2022/4/sea-games#>
                prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                prefix owl: <http://www.w3.org/2002/07/owl#>
                
                SELECT *
                WHERE {
                    ?x a owl:NamedIndividual .
                    ?x :negara ?negara .
                    ?x :medali ?medali .
                    ?x :2003 ?2003 .
                    ?x :2005 ?2005 .
                    ?x :2007 ?2007 .
                    ?x :2009 ?2009 .
                    ?x :2011 ?2011 .
                    ?x :2013 ?2013 .
                    ?x :2015 ?2015 .
                    ?x :2017 ?2017 .
                    ?x :2019 ?2019 .
                    ?x :2021 ?2021 .
                    ?x :total ?total .
                    FILTER (regex(?medali, '$medali', 'i'))
                }
                    ORDER BY ASC (?medali) DESC (xsd:integer(?total))
                    "
                );
            }
            else{
                $data = sparql_get(
                "http://localhost:3030/sea-games",
                "
                PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                prefix : <http://www.semanticweb.org/asus/ontologies/2022/4/sea-games#>
                prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                prefix owl: <http://www.w3.org/2002/07/owl#>
                
                SELECT *
                WHERE {
                    ?x a owl:NamedIndividual .
                    ?x :negara ?negara .
                    ?x :medali ?medali .
                    ?x :2003 ?2003 .
                    ?x :2005 ?2005 .
                    ?x :2007 ?2007 .
                    ?x :2009 ?2009 .
                    ?x :2011 ?2011 .
                    ?x :2013 ?2013 .
                    ?x :2015 ?2015 .
                    ?x :2017 ?2017 .
                    ?x :2019 ?2019 .
                    ?x :2021 ?2021 .
                    ?x :total ?total .
                }
                ORDER BY ASC (?medali) DESC (xsd:integer(?total))
                "
                );
            }
            
        }

        if (!isset($data)) {
            print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
        }
        return view('welcome', ['test'=>$test, 'data'=>$data]);
    }
}
