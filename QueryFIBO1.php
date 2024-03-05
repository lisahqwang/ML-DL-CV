PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
construct {
    ?child rdfs:subClassOf ?parent;
           rdfs:label ?label.
}
from <http://www.ontotext.com/explicit>
where  {
    bind(<https://spec.edmcouncil.org/fibo/ontology/FND/AgentsAndPeople/Agents/AutonomousAgent> as ?aagent).

	?child rdfs:subClassOf+ ?aagent .
    ?child rdfs:subClassOf ?parent;
    	rdfs:label ?label.	
    
    filter ( ?parent != ?child )
    filter ( !isBlank(?parent ) )

}
