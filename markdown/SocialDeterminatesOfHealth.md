# Social Determinates of Health
At the heart of notions of Health Equity or Culture of Health is the notion that our personal resources, environment, race, employment status and other aspects of your place and role in society have profound impacts on our ability to access healthcare and to generally stay healthy. Social Determinates of Health (SDH)

For a dry introduction, look to the CDC which defined SDH as [Conditions in the places where people live, learn, work, and play affect a wide range of health risks and outcomes.1 These conditions are known as social determinants of health (SDOH).](https://www.cdc.gov/socialdeterminants/).  For further definition, consider reading:
* [SDH resources from the World Health Organization](https://www.who.int/social_determinants/sdh_definition/en/)
* [Kaiser Family Foundation SDH Article ](https://www.kff.org/disparities-policy/issue-brief/beyond-health-care-the-role-of-social-determinants-in-promoting-health-and-health-equity/)
* [NEJM Catylst Article](https://catalyst.nejm.org/social-determinants-of-health/)
* [Wikipedia Article on SDH](https://en.wikipedia.org/wiki/Social_determinants_of_health) which is graded as a "Start" article despite being of "Mid" importance according to its [Talk Page](https://en.wikipedia.org/wiki/Talk:Social_determinants_of_health)

For data scientists however, there is a particularly promising tour of SDH concepts found in the ICD-10 Z codes. ICD Stands for International Statistical Classification of Diseases and Related Health Problems, and is a healthcare ontology [maintained by the World Health Organization](http://www.who.int/classifications/icd/en/). The current version of ICD is 11, The United States just updated its systems to use ICD 10 (in 2015). If you are not familiar with healthcare ontologies, take a look at [bioportal](https://bioportal.bioontology.org/) it is by far the best multi-health-ontology browser available. 

The Z-codes are ICD 10 codes that are prefixed with a 'Z' that are used to code for Social Determinates of Health. You might find browsing the sections titled:

* [External Causes of Morbity V00-Y99](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FV00-Y99)
* [Factors influencing health status and contact with health services (Z00-Z99)](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ00-Z99)

To be illustrative of the specific scope of what might count as a Social Determinate of Health. Consider reading [Don't Sleep on Z Codes](https://www.fortherecordmag.com/archives/0517p14.shtml) and [Z-code advice for hurricane injuries](https://www.texmed.org/Template.aspx?id=45851). 

Rather than continuing to provide reading materials, you might also consider watching the new series from [wellness expert Alex Drane](https://twitter.com/adrane), (already famous for her [unmentionables series](https://www.youtube.com/watch?v=Pn4ZKpNJ8bE) on SDH) and Prudential called "[The State of US](https://www.youtube.com/playlist?list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75)", which is focused on financial wellness, but ends up covering many classical social determinates of health. Dranes work has a unique gravity, since the messages are always simple-but-hard-messages while the parables that she uses to communicate her messages are unforgettable. You will find her work an improvement over my ranting.

Here is list of some of the State of Us videos, coded by the corresponding SDH ICD 10 code. This is technically a spoiler for the videos... Also, a real ICD-10 coding expert might dither about which codes I have chosen to represent the videos.. you have been warned.. 

* [The State of US - Stonington, ME - Self Employment](https://www.youtube.com/watch?v=8CvnMaUQ4Ks&index=2&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75)[Alex Drane version of Stonington, ME ](https://www.youtube.com/watch?v=0utjykT2vi8&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=13)
  * [Other injury due to accident to watercraft](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FV91)
  * [Cataclysmic storm](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FX37)
  * [Exposure to excessive natural cold](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FX31)
  * [Problems related to employment and unemployment](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ56)
* [The State of US - Jacksonville, NC - Military Families planning for college](https://www.youtube.com/watch?v=sVpBkRcfu4E&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=4) [Alex Drane version Jacksonville, NC](https://www.youtube.com/watch?v=SohlB0618Ag&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=12)
  * [Encounter for supervision of normal pregnancy](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ34)
  * [Operations of war](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FY36)
  * [Absence of family member due to military deployment](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ63.31)
  * [Stress on family due to return of family member from military deployment](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ63.71)
  * [Schooling unavailable and unattainable](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ55.1)
  * [Military deployment status](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ56.82)
  * [Exposure to disaster, war and other hostilities](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ65.5)
* [The State of US - Loma Linda, CA - Longer Retirements](https://www.youtube.com/watch?v=BMvMFL3vYdw&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=5) [Alex Drane version Loma Linda](https://www.youtube.com/watch?v=-b0vcsO71xk&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=11)
  * [Problems of adjustment to life-cycle transitions](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ60.0)
  * [Problems related to living in residential institution](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ59.3)
  * [Age-related physical debility](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FR54&jump_to_nav=true)
* [The State of US - Memphis, TN - Startups run by Women of Color ](https://www.youtube.com/watch?v=bwRPwqwwfOE&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=6) [Alex Drane Version Memphis, TN - Startups run by Women of Color](https://www.youtube.com/watch?v=VeFx5P6RW9o&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=10)
  * [Low income](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ59.6)
  * [Target of (perceived) adverse discrimination and persecution](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ60.5) (Note even sure what to say about the *percieved* thing here..)
* [The State of US - Monowi, NE - Extremely Rural Areas](https://www.youtube.com/watch?v=6GOAVEp89K0&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=8) [Alex Drane version of Monowi, NE - Extremely Rural Area ](https://www.youtube.com/watch?v=d665fqkGmtI&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=9)
  * [Disappearance and death of family member](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ63.4)
  * [Problems related to living alone](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ60.2)
* [The State of US - Huntsville, AL - Employee Stress ](https://www.youtube.com/watch?v=mfwUDsjeOlE&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=7)[Alex Drane version Huntsville, AL ](https://www.youtube.com/watch?v=mfwUDsjeOlE&t=0s&list=PLhnxP5C1M5EWK_VloLsl9hlFftLJDda75&index=7)
  * [Other physical and mental strain related to work](https://bioportal.bioontology.org/ontologies/ICD10CM/?p=classes&conceptid=http%3A%2F%2Fpurl.bioontology.org%2Fontology%2FICD10CM%2FZ56.6)
  * 





 



 