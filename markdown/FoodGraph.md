# Food Graph

We had a project to crowd-source food data that we had been working on. Many people, espeically children, have mutliple food preferences and sensitivities. The calculus of allowable foods is very very hard to do. How can a person be both Vegan and Halal? Vegetarian and avoiding avocados because of an allergy? The potential combinations can easily be resolved with a commercial-grade food database, but we wanted to create a proliferation of targeted diet apps by providing the underlying food ingredient and health calculations in an automated fashion. 

A story about kids living  with peanut allergy: [Science Toxin or Treatment?](http://science.sciencemag.org/content/362/6412/278?utm_campaign=toc_sci-mag_2018-10-18&et_rid=33803475&et_cid=2435885)

Further, for public health research it is possible to use the forced ordering (ingredient lists are ordered by volume, but contain recursively defined lists) as well as nutrition density to reverse engineer the sources and types of caloric intake with much greater accuracy. This is a big data ML type project that is impossible without reliable underlying data. 

The basic idea was to create an open food database that included several major components:

* Database keyed by UPC codes 
* Photos of the labels of foods
* Ingredient Lists (derived from photos of the ingredient labels, using [Amazon Mechanical Turk](https://www.mturk.com/)
* Nutrition Label data )(derived from photos of nutrition labels, using Amazon Mechanical Turk )



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

