PREFIX owl: <http://www.w3.org/2002/07/owl#>
PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
SELECT ?node ?name ?prominence {
  ?node <http://www.ontotext.com/owlim/entity#hasProminence> ?prominence;
        rdfs:label ?name;
        a <https://spec.edmcouncil.org/fibo/ontology/BE/Corporations/Corporations/PubliclyHeldCompany>.
#        a owl:NamedIndividual.
} order by desc(?prominence)
