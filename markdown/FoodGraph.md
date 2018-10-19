# Food Graph

We had a project to crowd-source food data that we had been working on. The rational for this came from a request we got from Cincinatti Childrens Hospital. Many of their most complex patients had two complex nutrition requirements. Perhaps a food allergy in combination with a food sensitity related to a seperate health condition like Crohns, etc. For these childrens parents and other caregivers, the calculus of allowable food was very very hard to do. We realized that was a generalied problem, with the combinatorics of diets.

How can a person be both Vegan and Halal? Vegetarian and avoiding avocados becasue of an allergy? The potential combinations can easily be resolved with a commercial-grade food database, but we wanted to create a proliferation of targeted diet apps by providing the underlying food ingredient and health calculations in an automated fashion. 

Further, for public health research it is possible to use the forced ordering (ingredient lists are ordered by volume, but contain recursively defined lists) as well as nutrition density to reverse engineer the sources and types of caloric intake with much greater accuracy. This is a big data ML type project that is impossible without reliable underlying data. 

The basic idea was to create an open food database that included several major components:

* Database keyed by UPC codes 
* Photos of the labels of foods
* Ingredient Lists (derived from photos of the ingredient labels, using [Amazon Mechanical Turk](https://www.mturk.com/)
* Nutrition Label data )(derived from photos of nutorion labels, using Amazon Mechanical Turk )



## Software Components

* An Iphone app that took rapid succession the following:
  * UPC code
  * Photo of the Label
  * Photo of the Nutirtion Label 
  * Photo of the Ingredient List
* A php API that accepted what the iphone app uploaded (very rudimentary)
* A php-based integration with Mechanical Turk that showed people either a nutition photo or a ingredient list and asked them to "human OCR them"

## Tasks

Since we last worked on the problem. several things have changed.

* The iphone app no longer works, because that happens
* The php backend needs to be updated to a reasonable Laravel framswork-based API. 
* The whole Amazon Turk integration could be improved dramatically
* Or replaced with one of the more modern compuer OCR mechanism from Google or Microsoft

