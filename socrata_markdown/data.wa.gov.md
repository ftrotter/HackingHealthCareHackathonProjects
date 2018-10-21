# data.wa.gov health datasets
* [ACS 2012 Youth Estimates](https://data.wa.gov/d/8a6v-tzdu) - Estimates of persons with disabilities or other support needs by Census tract in Washington State. DSHS prepared estimates of persons with disabilities or other support needs in Washington Census tracts using data from the US Census Bureau’s 2012 American Community Survey. The estimates were prepared for DSHS and the Washington Department of Health to assist in emergency preparedness planning for Washington jurisdictions. <div><br /></div><div>Only 5-year estimates (2008-2012) are available for Census tracts.

Estimated counts, percentages, margins of error (MOEs) of counts and percentages by Census tract have been calculated for the following characteristics: Persons with Disabilities, Hearing Difficulty, Vision Difficulty, Cognitive Difficulty, Ambulatory Difficulty, Self-Care Difficulty, Independent Living Difficulty, Persons with Two or More Disabilities, Persons with Disabilities and in Poverty, Persons in Groups Quarters, Households Without Vehicles, Persons Speaking English less than &quot;Very Well,&quot; Persons in Poverty.<div><ul><li>Lifecycle status: <b>Production</b><br /></li><li>Purpose: enable open access to DSHS data<br /></li><li>DSHS Data Security: Category 1 - Public<br /></li><li>Last Update: 4/24/2015<br /></li><li>Update Cycle: As needed</li><li><b>FGDC Metadata - For Layer: </b><a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml</a><br /></li><li>FGDC Metadata - For Adult Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml</a></li><li>FGDC Metadata - For Senior Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml</a></li><li>FGDC Metadata - For Youth Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml</a></li></ul>Important: DSHS reserves the right to alter, suspend, re-host, or retire this service at any time and without notice. This is a map service that you can use in custom web applications and software products. Your use of this map service in these types of tools forms a dependency on the service definition (available fields, layers, etc.). If you form any dependency on this service, be aware of this significant risk to your purposes. You might consider mitigating your risk by extracting the source data and using it to host your own service in an environment under your control. Typically, DSHS Enterprise GIS staff will provide notification of changes via the Comments RSS capability in ArcGIS Online. You may subscribe to the RSS feed that publishes comments to monitor any planned and notified changes.<br /></div></div>* [Watershed Health Monitoring: BIBI](https://data.wa.gov/d/fcrw-p9wq) - This file lists annual-average benthic biological integrity scores for weighted sites sampled by the Watershed Health Monitoring Program through 2016. Adjusted spatial weights are also provided.* [WA Soils](https://data.wa.gov/d/e76j-28nj) - Information for SOILS data layer was derived from the Private Forest Land Grading system (PFLG) and subsequent soil surveys. PFLG was a five-year mapping program completed in 1980 for the purpose of forestland taxation. It was funded by the Washington State Department of Revenue. The Department of Natural Resources, Soil Conservation Service (now known as the Natural Resources Conservation Service or NRCS), USDA Forest Service and Washington State University conducted soil mapping cooperatively following national soil survey standards. Private lands having the potential of supporting commercial forests were surveyed along with interspersed small areas of State lands, Indian tribal lands, and federal lands. Because this was a cooperative soil survey project, agricultural and non-commercial forestlands were included within some survey areas. After the Department of Natural Resources originally developed its geographic information system, digitized soil map unit delineations and a few soil attributes were transferred to the system. Remaining PFLG soil attributes were later added and are now available through associated lookup tables. SCS (NRCS) soils data on agricultural lands also have been subsequently added to this data layer. The SOILS data layer includes approximately 1,100 townships with wholly or partially digitized soils data. State and private lands which have the potential of supporting commercial forest stands were surveyed. Some Indian tribal and federal lands were surveyed. Because this was a cooperative soils survey project, agricultural and non-commercial forestlands were also included within some survey areas. After the Department of Natural Resources originally developed its geographic information system, digitized soils delineations and a few soil attributes were transferred to the system. Remaining PFLG soil attributes were added at a later time and are now available through associated lookup tables. SCS soils data on agricultural lands also have subsequently been added to this data layer. This layer includes approximately 1, 100 townships with wholly or partially digitized soils data (2,101 townships would provide complete coverage of the state of Washington).-

The soils_sv resolves one to many relationships and as such is one of those special &quot;DNR&quot; spatial views ( ie. is  implemented  similar to a feature class). Column names may not match between SOILS_SV and the originating datasets.
Use limitations

This Spatial View is available to Washingotn DNR users and those with access to the Washington State Uplands IMS site.

The following cautions only apply to one-to-many and many-to-many spatial views!
Use these in the metadata only if the SV is one-to-many or many-to-many.

CAUTIONS:
Area and Length Calculations:  Use care when summarizing or totaling area or length calculations from spatial views with one-to-many or many-to-many relationships.  One-to-many or many-to-many relationships between tabular and spatial data create multiple features in the same geometry.  In other words, if there are two or more records in the table that correspond to the same feature (a single polygon, line or point), the spatial view will contain an identical copy of that feature's geometry for every corresponding record in the table.  Area and length calculations should be performed carefully, to ensure they are not being exaggerated by including copies of the same feature's geometry.

Symbolizing Spatial Features:  
Use care when symbolizing data in one-to-many or many-to-many spatial views.  If there are multiple attributes tied to the same feature, symbolizing with a solid fill may mask other important features within the spatial view.  This can be most commonly seen when symbolizing features based on a field with multiple table records.  

Labeling Spatial Features:
Spatial views with one-to-many or many-to-many relationships may present duplicate labels for those features with multiple table records.  This is becau* [ACS 2012 Youth Estimates](https://data.wa.gov/d/8a6v-tzdu) - Estimates of persons with disabilities or other support needs by Census tract in Washington State. DSHS prepared estimates of persons with disabilities or other support needs in Washington Census tracts using data from the US Census Bureau’s 2012 American Community Survey. The estimates were prepared for DSHS and the Washington Department of Health to assist in emergency preparedness planning for Washington jurisdictions. <div><br /></div><div>Only 5-year estimates (2008-2012) are available for Census tracts.

Estimated counts, percentages, margins of error (MOEs) of counts and percentages by Census tract have been calculated for the following characteristics: Persons with Disabilities, Hearing Difficulty, Vision Difficulty, Cognitive Difficulty, Ambulatory Difficulty, Self-Care Difficulty, Independent Living Difficulty, Persons with Two or More Disabilities, Persons with Disabilities and in Poverty, Persons in Groups Quarters, Households Without Vehicles, Persons Speaking English less than &quot;Very Well,&quot; Persons in Poverty.<div><ul><li>Lifecycle status: <b>Production</b><br /></li><li>Purpose: enable open access to DSHS data<br /></li><li>DSHS Data Security: Category 1 - Public<br /></li><li>Last Update: 4/24/2015<br /></li><li>Update Cycle: As needed</li><li><b>FGDC Metadata - For Layer: </b><a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml</a><br /></li><li>FGDC Metadata - For Adult Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml</a></li><li>FGDC Metadata - For Senior Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml</a></li><li>FGDC Metadata - For Youth Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml</a></li></ul>Important: DSHS reserves the right to alter, suspend, re-host, or retire this service at any time and without notice. This is a map service that you can use in custom web applications and software products. Your use of this map service in these types of tools forms a dependency on the service definition (available fields, layers, etc.). If you form any dependency on this service, be aware of this significant risk to your purposes. You might consider mitigating your risk by extracting the source data and using it to host your own service in an environment under your control. Typically, DSHS Enterprise GIS staff will provide notification of changes via the Comments RSS capability in ArcGIS Online. You may subscribe to the RSS feed that publishes comments to monitor any planned and notified changes.<br /></div></div>* [Watershed Health Monitoring: BIBI](https://data.wa.gov/d/fcrw-p9wq) - This file lists annual-average benthic biological integrity scores for weighted sites sampled by the Watershed Health Monitoring Program through 2016. Adjusted spatial weights are also provided.* [Watershed Health Monitoring: Excess Sediment in Salmon/Trout Streams](https://data.wa.gov/d/63h7-zpny) - This file lists random sites sampled by the Department of Ecology's Watershed Health Monitoring program during 2009-2016. The list is limited to those sites known to be occupied by salmon or trout at some time during the year. It also shows percentage of the stream network represented by the site and whether the observed sediment on the surface of the stream bottom exceeded levels estimated to be optimum for sediment-sensitive salmonids.* [DSHS Behavioral Health Organization Regions](https://data.wa.gov/d/89df-ua3a) - <div>DSHS and the state Health Care Authority (HCA) jointly designated Regional Service Areas (RSAs) in June 2015, following legislative authorization in 2014. RSAs define new geographical boundaries for the state to purchase behavioral and physical health care through managed care contracts. They are not administrative authorities. Behavioral Health Organizations (BHOs) are located within newly formed Regional Service Areas (RSAs). There is one BHO per RSA, except for the Southwest Washington RSA, which has a contract with the Health Care Authority for managed care plans. RSAs join and include contiguous counties, contain at least 60,000 people on Medicaid, possess an adequate number of health care providers, and reflect natural physical and behavioral health service referral patterns. More information on BHOs is available at this link (<a href="https://www.dshs.wa.gov/bha/division-behavioral-health-and-recovery/behavioral-health-organizations" target="_blank">https://www.dshs.wa.gov/bha/division-behavioral-health-and-recovery/behavioral-health-organizations</a>).</div><div><ul><li>Lifecycle status: Production<br /></li><li>Purpose: enable open access to DSHS data<br /></li><li>DSHS Data Security: Category 1 - Public<br /></li><li>Last Update: 7/7/2016<br /></li><li>Update Cycle: as needed<br /></li><li>Data Sources: DSHS<br /></li></ul></div><div><b>Important:</b> DSHS reserves the right to alter, suspend, re-host, or retire this service at any time and without notice. This is a map service that you can use in custom web applications and software products. Your use of this map service in these types of tools forms a dependency on the service definition (available fields, layers, etc.). If you form any dependency on this service, be aware of this significant risk to your purposes. You might consider mitigating your risk by extracting the source data and using it to host your own service in an environment under your control. Typically, DSHS Enterprise GIS staff will provide notification of changes via the &quot;Comments&quot; RSS capability in ArcGIS Online. You may subscribe to the RSS feed that publishes comments to monitor any planned and notified changes.</div>* [Deprecated - Jurisdictions By Election Year](https://data.wa.gov/d/m6wv-f9g5) - This dataset contains all jurisdictions for which at least one candidate has registered with the PDC. Jurisdictions that do not have a campaign finance filing requirement are not displayed. For example, the office of the governor is displayed only for years where the office is up for election. The dataset covers the last 10 years.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [DAHP - Government Land Office maps (GLOs) Trails](https://data.wa.gov/d/aex8-qepz) - <p>Government Land Office maps (GLOs) are a result of the effort to survey all United States public lands before settlement. Starting in 1812 land was divided into square six mile blocks called townships, then subdivided into sections and ranges. Each subdivided area was surveyed and given its own map or GLO. During this process surveyors were required to indicate cultural resources such as roads and Indian trails and standardized symbols were used to represent geographic features. These GLOs are now maintained by the Bureau of Land Management as part of the official Land Status and Cadastral Survey records. As land was divided into parcels of individual ownership additional cadastral survey maps were created over time. For this reason there are often multiple GLOs or &quot;cadastral survey maps&quot; for one township / range, generally numbered one through four. For this seamless GLO layer, DAHP focused solely on the more historical GLOs which were usually listed as image number one or two for that specific township / range in the BLM Cadastral Survey records. In some cases no GLOs were available for review. Such areas included National Forest Lands, National Parks, Indian Reservations, and remote wilderness areas.<br /></p>* [Home Page Tiles](https://data.wa.gov/d/dx9h-3hci) - Data used to generate the tiles displayed on the Data.wa.gov home page.* [WA-APCD Quality and Cost Summary Report: County Cost](https://data.wa.gov/d/4rfn-62je) - WA-APCD - Washington All-Payer Claims Database

The WA-APCD is the state’s most complete source of health care eligibility, medical claims, pharmacy claims, and dental claims insurance data. It contains claims from more than 50 data suppliers, spanning commercial, Medicaid, and Medicare managed care. The WA-APCD has historical claims data for five years (2013-2017), with ongoing refreshes scheduled quarterly. Workers' compensation data from the Washington Department of Labor & Industries will be added in fall 2018.

Download the attachment for the data dictionary and more information about WA-APCD and the data.* [WA DNR Managed Land Parcels](https://data.wa.gov/d/sz58-nyf3) - The Parcel layer consists of parcels that are areas land in which the Department of Natural Resources holds some interest and are located anywhere in the upland area of the State of Washington.  Three types of Parcels are currently held in the parcel layer.  The number of Parcel types may increase in the future.  Ownership Parcels, parcel type code 1, consist of Washington State owned land managed by the Department of Natural Resources.  Most ownership parcels are held and managed for the benefit of some trust such as the Common School and Indemnity trust.  Of the several parcel types, only Ownership Parcels represent the entire extent of the particular type of land managed by DNR.  The other parcel types are incomplete data sets.  Disposed Parcels, parcel type code 2, consist of ownership parcels that have been disposed of since July 1, 2007.  A very few parcels disposed of prior to that date are also included.  Easement Parcels, parcel type code 3, consist of various types of easements acquired for the State by the Department.  Some of the Easements are negative easements over land not owned by the State, for example Conservation Easements which remove certain development rights away for the parcel owner.  Other Easements are positive rights acquired by the State, such as roadway easements.<br /><a href="https://fortress.wa.gov/dnr/adminsa/GisData/metadata/cadastre_parcel.htm" target="_blank">WA DNR Managed Land Parcels Metadata</a>* [Home Page Tiles](https://data.wa.gov/d/dx9h-3hci) - Data used to generate the tiles displayed on the Data.wa.gov home page.* [WA-APCD Quality and Cost Summary Report: County Cost](https://data.wa.gov/d/4rfn-62je) - WA-APCD - Washington All-Payer Claims Database

The WA-APCD is the state’s most complete source of health care eligibility, medical claims, pharmacy claims, and dental claims insurance data. It contains claims from more than 50 data suppliers, spanning commercial, Medicaid, and Medicare managed care. The WA-APCD has historical claims data for five years (2013-2017), with ongoing refreshes scheduled quarterly. Workers' compensation data from the Washington Department of Labor & Industries will be added in fall 2018.

Download the attachment for the data dictionary and more information about WA-APCD and the data.* [WA DNR Managed Land Parcels](https://data.wa.gov/d/sz58-nyf3) - The Parcel layer consists of parcels that are areas land in which the Department of Natural Resources holds some interest and are located anywhere in the upland area of the State of Washington.  Three types of Parcels are currently held in the parcel layer.  The number of Parcel types may increase in the future.  Ownership Parcels, parcel type code 1, consist of Washington State owned land managed by the Department of Natural Resources.  Most ownership parcels are held and managed for the benefit of some trust such as the Common School and Indemnity trust.  Of the several parcel types, only Ownership Parcels represent the entire extent of the particular type of land managed by DNR.  The other parcel types are incomplete data sets.  Disposed Parcels, parcel type code 2, consist of ownership parcels that have been disposed of since July 1, 2007.  A very few parcels disposed of prior to that date are also included.  Easement Parcels, parcel type code 3, consist of various types of easements acquired for the State by the Department.  Some of the Easements are negative easements over land not owned by the State, for example Conservation Easements which remove certain development rights away for the parcel owner.  Other Easements are positive rights acquired by the State, such as roadway easements.<br /><a href="https://fortress.wa.gov/dnr/adminsa/GisData/metadata/cadastre_parcel.htm" target="_blank">WA DNR Managed Land Parcels Metadata</a>* [ACS 2012 Adult Estimates](https://data.wa.gov/d/3v2s-3bcx) - Estimates of persons with disabilities or other support needs by Census tract in Washington State. DSHS prepared estimates of persons with disabilities or other support needs in Washington Census tracts using data from the US Census Bureau’s 2012 American Community Survey. The estimates were prepared for DSHS and the Washington Department of Health to assist in emergency preparedness planning for Washington jurisdictions. <div><br /></div><div>Only 5-year estimates (2008-2012) are available for Census tracts.

Estimated counts, percentages, margins of error (MOEs) of counts and percentages by Census tract have been calculated for the following characteristics: Persons with Disabilities, Hearing Difficulty, Vision Difficulty, Cognitive Difficulty, Ambulatory Difficulty, Self-Care Difficulty, Independent Living Difficulty, Persons with Two or More Disabilities, Persons with Disabilities and in Poverty, Persons in Groups Quarters, Households Without Vehicles, Persons Speaking English less than &quot;Very Well,&quot; Persons in Poverty.<div><ul><li>Lifecycle status: <b>Production</b><br /></li><li>Purpose: enable open access to DSHS data<br /></li><li>DSHS Data Security: Category 1 - Public<br /></li><li>Last Update: 4/24/2015<br /></li><li>Update Cycle: As needed</li><li><b>FGDC Metadata - For Layer: </b><a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml</a><br /></li><li>FGDC Metadata - For Adult Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml</a></li><li>FGDC Metadata - For Senior Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml</a></li><li>FGDC Metadata - For Youth Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml</a></li></ul>Important: DSHS reserves the right to alter, suspend, re-host, or retire this service at any time and without notice. This is a map service that you can use in custom web applications and software products. Your use of this map service in these types of tools forms a dependency on the service definition (available fields, layers, etc.). If you form any dependency on this service, be aware of this significant risk to your purposes. You might consider mitigating your risk by extracting the source data and using it to host your own service in an environment under your control. Typically, DSHS Enterprise GIS staff will provide notification of changes via the Comments RSS capability in ArcGIS Online. You may subscribe to the RSS feed that publishes comments to monitor any planned and notified changes.<br /></div></div>* [ACS 2012 Senior Estimates](https://data.wa.gov/d/xudn-pz9f) - Estimates of persons with disabilities or other support needs by Census tract in Washington State. DSHS prepared estimates of persons with disabilities or other support needs in Washington Census tracts using data from the US Census Bureau’s 2012 American Community Survey. The estimates were prepared for DSHS and the Washington Department of Health to assist in emergency preparedness planning for Washington jurisdictions. <div><br /></div><div>Only 5-year estimates (2008-2012) are available for Census tracts.

Estimated counts, percentages, margins of error (MOEs) of counts and percentages by Census tract have been calculated for the following characteristics: Persons with Disabilities, Hearing Difficulty, Vision Difficulty, Cognitive Difficulty, Ambulatory Difficulty, Self-Care Difficulty, Independent Living Difficulty, Persons with Two or More Disabilities, Persons with Disabilities and in Poverty, Persons in Groups Quarters, Households Without Vehicles, Persons Speaking English less than &quot;Very Well,&quot; Persons in Poverty.<div><ul><li>Lifecycle status: <b>Production</b><br /></li><li>Purpose: enable open access to DSHS data<br /></li><li>DSHS Data Security: Category 1 - Public<br /></li><li>Last Update: 4/24/2015<br /></li><li>Update Cycle: As needed</li><li><b>FGDC Metadata - For Layer: </b><a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml</a><br /></li><li>FGDC Metadata - For Adult Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml</a></li><li>FGDC Metadata - For Senior Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml</a></li><li>FGDC Metadata - For Youth Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml</a></li></ul>Important: DSHS reserves the right to alter, suspend, re-host, or retire this service at any time and without notice. This is a map service that you can use in custom web applications and software products. Your use of this map service in these types of tools forms a dependency on the service definition (available fields, layers, etc.). If you form any dependency on this service, be aware of this significant risk to your purposes. You might consider mitigating your risk by extracting the source data and using it to host your own service in an environment under your control. Typically, DSHS Enterprise GIS staff will provide notification of changes via the Comments RSS capability in ArcGIS Online. You may subscribe to the RSS feed that publishes comments to monitor any planned and notified changes.<br /></div></div>* [Watershed Health Monitoring: Riparian Cover using X DensioBank](https://data.wa.gov/d/asqd-efxe) - This is a list of random sites sampled by the Department of Ecology's Watershed Health Monitoring Program during 2009-2016. It includes data for riparian cover as measured with a densiometer at the bankfull margins and the amount of stream network represented by the random site. Densiometer data are assigned ratings of riparian condition relative to reference conditions.* [Pre-2016 Lobbyist Employment Registrations](https://data.wa.gov/d/x2x6-7bd8) - This dataset contains records indicating the employment of lobbyist firms by entities that employ lobbyists. Each record represents a registration by the lobbyist firm and employer (client) for one year. 

In some cases, the lobbyist firm may have been hired as a subcontractor by another firm to lobby on behalf of their clients. In these cases, refer to the contractor fields to determine the lobbyist firm that has hired the subcontractor.

This data set contains only records up to the year 2015, and going back ten years from the current year. For records beyond 2015, please see the data set, "Lobbyist Employment Registrations."

Each record provides links to document providing detailed information about the lobbyist firm, employer and nature of the employment.

This data set is being made available for evaluation of the data set format. The data are not complete or presumed to be accurate.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Number of People Affected By Drinking Water Advisories](https://data.wa.gov/d/eduz-zrij) - The Public Health Activities and Services (PHAS) data measures what public health does in the state and how much of it is done across all 35 local health agencies and the Department of Health in Washington State each year.  Activities measured fall under the following broad categories:
  Access To Care 
  Assessment 
  Communicable Disease 
  Communicable Disease: Immunization 
  Emergency Preparedness 
  Environmental Health 
  Healthy Families 
  Prevention and Wellness
More PHAS data is available at https://fortress.wa.gov/doh/phip/PHIP/Home.mvc* [Opengov Lobbyist Registrations](https://data.wa.gov/d/d7di-4cvg) - This dataset contains records indicating the employment of lobbyist firms by entities that employ lobbyists. Each record represents a registration by the lobbyist firm and employer (client) for one year. 

In some cases, the lobbyist firm may have been hired as a subcontractor by another firm to lobby on behalf of their clients. In these cases, refer to the contractor fields to determine the lobbyist firm that has hired the subcontractor.

This data set contains only records for 2016 and later. For records prior to 2016, please see the data set, "Pre-2016 Lobbyist Employment Registrations"

Each record provides links to document providing detailed information about the lobbyist firm, employer and nature of the employment.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Lobbyist Compensation and Expenses by Source](https://data.wa.gov/d/9nnw-c693) - This dataset contains compensation and expense summary records from the monthly reports of lobbying activity. One record is included for each client that paid compensation or incurred expenses during the filing period. If the lobbyist firm themselves incurred any expenses not reimbursed by a client, a record is included summarizing the lobbyist firm's expenses. If a lobbyist reported no compensation or expenses on the report, no records will be in this dataset. Records are included for a period of ten years, beginning in January, 2016. The date is determined as the filing period of the report, not the date received. Records are included for the full year so for example, all 2017 records will be included until the entire year 2017 falls outside the 10 year time span.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [ahhhh](https://data.wa.gov/d/urki-e22w) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Parker](https://data.wa.gov/d/hy3f-t287) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [rickman](https://data.wa.gov/d/62bq-q9ck) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [sharma](https://data.wa.gov/d/f98f-bc43) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [wanda seigfreid](https://data.wa.gov/d/9i3z-i596) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Pending Residency Licenses](https://data.wa.gov/d/btpf-dv7h) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [tiiffy](https://data.wa.gov/d/s2fv-7nn3) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [SierraRussell](https://data.wa.gov/d/96ah-by3q) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Mary Ann Ehrgott](https://data.wa.gov/d/kwfp-ref5) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Detail VIew](https://data.wa.gov/d/xaex-8gn6) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Sanctioned physicians](https://data.wa.gov/d/7364-4xgh) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Keegan](https://data.wa.gov/d/5ucv-yi7u) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [ActivePodiatricPhysicianAndSurgeonLicenses](https://data.wa.gov/d/k5mn-4k3c) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Lee tyroum](https://data.wa.gov/d/wbpu-44t9) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Pharmacists](https://data.wa.gov/d/fjjv-ikwf) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [KRIZZIAH SUAREZ](https://data.wa.gov/d/5ybp-2uff) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [MA-R search](https://data.wa.gov/d/gnzk-3qnn) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [latasha h alvarado](https://data.wa.gov/d/ynt2-dmyz) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Credentials](https://data.wa.gov/d/8z6z-zpwg) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Angie B](https://data.wa.gov/d/bjzy-b2zg) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [ascending last name](https://data.wa.gov/d/cef6-tnvw) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Alyn Duncan](https://data.wa.gov/d/y5bz-gn2d) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Mona View](https://data.wa.gov/d/i8us-s7ah) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [HMC_IDRC](https://data.wa.gov/d/h6d9-mv58) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Kelsi Fowler](https://data.wa.gov/d/ifyg-wsf5) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Hutton Levenson](https://data.wa.gov/d/cjei-x365) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Bee 2015.03.27](https://data.wa.gov/d/iypn-38uz) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [ARNPs + active or not + action taken or not](https://data.wa.gov/d/99na-8u5p) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Rickman](https://data.wa.gov/d/fi9n-3fgf) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Lori Ann Blattenberg](https://data.wa.gov/d/2is8-cwe6) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Mary Broadbent](https://data.wa.gov/d/tck6-8b8y) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [WA02_all_recs](https://data.wa.gov/d/5bn5-93y7) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Lewis Thayer](https://data.wa.gov/d/knq3-eqnv) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Sherri Yackel](https://data.wa.gov/d/kgb6-75at) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [n](https://data.wa.gov/d/7hjv-emmm) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [KRMC MSS](https://data.wa.gov/d/krwu-jcs7) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Mona](https://data.wa.gov/d/fpm2-ybbt) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Cred](https://data.wa.gov/d/6xdf-8ca4) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [ActivePodiatricPhysicianAndSurgeonLicenses](https://data.wa.gov/d/iana-jw8c) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [SoN_SK](https://data.wa.gov/d/b83e-f7n2) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Lee Tryourm](https://data.wa.gov/d/tvja-smsy) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Licensed Midwives](https://data.wa.gov/d/syjk-ymxm) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Parker](https://data.wa.gov/d/qbwu-c9dz) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Christa Moore counselor](https://data.wa.gov/d/mdib-p7c7) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [johnson_dar_](https://data.wa.gov/d/bbxa-rma3) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [RN](https://data.wa.gov/d/bfp6-w5ja) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [barbara](https://data.wa.gov/d/t5e7-p2d6) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [SOP View](https://data.wa.gov/d/d97t-gm7x) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Sabrina stolz](https://data.wa.gov/d/wnex-iz3v) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Sherri Yackel](https://data.wa.gov/d/36vs-25qb) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [gottschalk rn](https://data.wa.gov/d/jnta-5h6q) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Lori License WA.](https://data.wa.gov/d/csxq-a422) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [License check](https://data.wa.gov/d/3ckw-vp8n) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Barbra Cooper](https://data.wa.gov/d/44j8-gi8s) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Lori Ann Blattenberg](https://data.wa.gov/d/rc4v-ykpk) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Residency Licenses Newest to Oldest](https://data.wa.gov/d/9fsg-rfa8) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Kimberly Pacheco](https://data.wa.gov/d/eyjn-wt6n) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Mine](https://data.wa.gov/d/ydmh-fnxs) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Clingenpeel](https://data.wa.gov/d/x7ve-3brq) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Bertram](https://data.wa.gov/d/fgne-53sr) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Yakima Avenue Medical CLinic PLLC](https://data.wa.gov/d/sj3h-wfmm) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [S. Cassone](https://data.wa.gov/d/mbz8-rfuh) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [MITCHELL](https://data.wa.gov/d/j2t4-czkj) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [TyraV](https://data.wa.gov/d/3694-vruz) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [HEATHER DI BIASE](https://data.wa.gov/d/rxa9-vvqu) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Patti](https://data.wa.gov/d/4f5d-5tdn) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Credentials](https://data.wa.gov/d/yp2z-s5j4) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Katie's View](https://data.wa.gov/d/xr77-82dz) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Podiatrist Actions](https://data.wa.gov/d/3dit-vgvf) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [dr.alf](https://data.wa.gov/d/pn4x-rv9j) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [MA](https://data.wa.gov/d/x36f-hznq) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [hodalo](https://data.wa.gov/d/y344-6hfy) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Voter Address Precinct Crosswalk](https://data.wa.gov/d/37cr-k5cr) - The PDC uses this data set for its online web applications to assist the public in finding information relative to a particular jurisdiction. It is provided here for the purpose of assisting application developers and may be of limited interest for the general public.

This dataset is a subset (copy) of voter registration records provided to the Public Disclosure Commission by the Washington Secretary of State (SOS) under the terms of SOS and applicable law. Use of this data is governed by any restrictions or limitations of the original release by SOS. By accessing this data you are agreeing to use the data in accordance with the RCW 29A.08.720, RCW 29A.08.740 and RCW 42.56.070(9) and any other applicable law.

The PDC has removed all information from the original data set except the address and precinct information for the purpose of assisting the public in determining how their address correlates to the PDC's internal accounting of jurisdictions. This data set is updated infrequently. Please see the date of last update in the metadata. 

This data set can be used to correlate an address in Washington state with a precinct code. The precinct code can then be used to lookup a corresponding PDC jurisdiction and office in the data set containing the PDCs precinct to jurisdiction crosswalk. These data are provided as-is and may contain errors or omissions. Please refer to the SOS for the most recent data.* [Lobbyist Employment Registrations](https://data.wa.gov/d/xhn7-64im) - This dataset contains records indicating the employment of lobbyist firms by entities that employ lobbyists. Each record represents a registration by the lobbyist firm and employer (client) for one year. 

In some cases, the lobbyist firm may have been hired as a subcontractor by another firm to lobby on behalf of their clients. In these cases, refer to the contractor fields to determine the lobbyist firm that has hired the subcontractor.

This data set contains only records for 2016 and later. For records prior to 2016, please see the data set, "Pre-2016 Lobbyist Employment Registrations"

Each record provides links to document providing detailed information about the lobbyist firm, employer and nature of the employment.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [WA-APCD Quality and Cost Summary Report: Hospital Quality](https://data.wa.gov/d/q3qk-yy3p) - WA-APCD - Washington All-Payer Claims Database

The WA-APCD is the state’s most complete source of health care eligibility, medical claims, pharmacy claims, and dental claims insurance data. It contains claims from more than 50 data suppliers, spanning commercial, Medicaid, and Medicare managed care. The WA-APCD has historical claims data for five years (2013-2017), with ongoing refreshes scheduled quarterly. Workers' compensation data from the Washington Department of Labor & Industries will be added in fall 2018.

Download the attachment for the data dictionary and more information about WA-APCD and the data.* [Public Health Activities and Services - 2013](https://data.wa.gov/d/28ar-n972) - The Public Health Activities and Services (PHAS) data measures what public health does in the state and how much of it is done across all 35 local health agencies and the Department of Health in Washington State each year.  Activities measured fall under the following broad categories:
  Access To Care 
  Assessment 
  Communicable Disease 
  Communicable Disease: Immunization 
  Emergency Preparedness 
  Environmental Health 
  Healthy Families 
  Prevention and Wellness
More PHAS data is available at https://fortress.wa.gov/doh/phip/PHIP/Home.mvc* [WA-APCD Quality and Cost Summary Report: Practice Quality](https://data.wa.gov/d/ebwb-9rx9) - WA-APCD - Washington All-Payer Claims Database

The WA-APCD is the state’s most complete source of health care eligibility, medical claims, pharmacy claims, and dental claims insurance data. It contains claims from more than 50 data suppliers, spanning commercial, Medicaid, and Medicare managed care. The WA-APCD has historical claims data for five years (2013-2017), with ongoing refreshes scheduled quarterly. Workers' compensation data from the Washington Department of Labor & Industries will be added in fall 2018.

Download the attachment for the data dictionary and more information about WA-APCD and the data.* [WA-APCD Quality and Cost Summary Report: ACH Quality](https://data.wa.gov/d/j78i-gfy5) - WA-APCD - Washington All-Payer Claims Database

The WA-APCD is the state’s most complete source of health care eligibility, medical claims, pharmacy claims, and dental claims insurance data. It contains claims from more than 50 data suppliers, spanning commercial, Medicaid, and Medicare managed care. The WA-APCD has historical claims data for five years (2013-2017), with ongoing refreshes scheduled quarterly. Workers' compensation data from the Washington Department of Labor & Industries will be added in fall 2018.

Download the attachment for the data dictionary and more information about WA-APCD and the data.* [Sarah](https://data.wa.gov/d/6mxf-4juq) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [ACS 2012 Adult Estimates](https://data.wa.gov/d/3v2s-3bcx) - Estimates of persons with disabilities or other support needs by Census tract in Washington State. DSHS prepared estimates of persons with disabilities or other support needs in Washington Census tracts using data from the US Census Bureau’s 2012 American Community Survey. The estimates were prepared for DSHS and the Washington Department of Health to assist in emergency preparedness planning for Washington jurisdictions. <div><br /></div><div>Only 5-year estimates (2008-2012) are available for Census tracts.

Estimated counts, percentages, margins of error (MOEs) of counts and percentages by Census tract have been calculated for the following characteristics: Persons with Disabilities, Hearing Difficulty, Vision Difficulty, Cognitive Difficulty, Ambulatory Difficulty, Self-Care Difficulty, Independent Living Difficulty, Persons with Two or More Disabilities, Persons with Disabilities and in Poverty, Persons in Groups Quarters, Households Without Vehicles, Persons Speaking English less than &quot;Very Well,&quot; Persons in Poverty.<div><ul><li>Lifecycle status: <b>Production</b><br /></li><li>Purpose: enable open access to DSHS data<br /></li><li>DSHS Data Security: Category 1 - Public<br /></li><li>Last Update: 4/24/2015<br /></li><li>Update Cycle: As needed</li><li><b>FGDC Metadata - For Layer: </b><a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml</a><br /></li><li>FGDC Metadata - For Adult Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml</a></li><li>FGDC Metadata - For Senior Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml</a></li><li>FGDC Metadata - For Youth Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml</a></li></ul>Important: DSHS reserves the right to alter, suspend, re-host, or retire this service at any time and without notice. This is a map service that you can use in custom web applications and software products. Your use of this map service in these types of tools forms a dependency on the service definition (available fields, layers, etc.). If you form any dependency on this service, be aware of this significant risk to your purposes. You might consider mitigating your risk by extracting the source data and using it to host your own service in an environment under your control. Typically, DSHS Enterprise GIS staff will provide notification of changes via the Comments RSS capability in ArcGIS Online. You may subscribe to the RSS feed that publishes comments to monitor any planned and notified changes.<br /></div></div>* [ACS 2012 Senior Estimates](https://data.wa.gov/d/xudn-pz9f) - Estimates of persons with disabilities or other support needs by Census tract in Washington State. DSHS prepared estimates of persons with disabilities or other support needs in Washington Census tracts using data from the US Census Bureau’s 2012 American Community Survey. The estimates were prepared for DSHS and the Washington Department of Health to assist in emergency preparedness planning for Washington jurisdictions. <div><br /></div><div>Only 5-year estimates (2008-2012) are available for Census tracts.

Estimated counts, percentages, margins of error (MOEs) of counts and percentages by Census tract have been calculated for the following characteristics: Persons with Disabilities, Hearing Difficulty, Vision Difficulty, Cognitive Difficulty, Ambulatory Difficulty, Self-Care Difficulty, Independent Living Difficulty, Persons with Two or More Disabilities, Persons with Disabilities and in Poverty, Persons in Groups Quarters, Households Without Vehicles, Persons Speaking English less than &quot;Very Well,&quot; Persons in Poverty.<div><ul><li>Lifecycle status: <b>Production</b><br /></li><li>Purpose: enable open access to DSHS data<br /></li><li>DSHS Data Security: Category 1 - Public<br /></li><li>Last Update: 4/24/2015<br /></li><li>Update Cycle: As needed</li><li><b>FGDC Metadata - For Layer: </b><a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_EstimatesbyCensusTract.xml</a><br /></li><li>FGDC Metadata - For Adult Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_AdultEstimates.xml</a></li><li>FGDC Metadata - For Senior Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_SeniorEstimates.xml</a></li><li>FGDC Metadata - For Youth Table: <a href="http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml" target="_blank">http://gis.dshs.wa.gov/metadata/opendata/ACS2012_YouthEstimates.xml</a></li></ul>Important: DSHS reserves the right to alter, suspend, re-host, or retire this service at any time and without notice. This is a map service that you can use in custom web applications and software products. Your use of this map service in these types of tools forms a dependency on the service definition (available fields, layers, etc.). If you form any dependency on this service, be aware of this significant risk to your purposes. You might consider mitigating your risk by extracting the source data and using it to host your own service in an environment under your control. Typically, DSHS Enterprise GIS staff will provide notification of changes via the Comments RSS capability in ArcGIS Online. You may subscribe to the RSS feed that publishes comments to monitor any planned and notified changes.<br /></div></div>* [Watershed Health Monitoring: Riparian Cover using X DensioBank](https://data.wa.gov/d/asqd-efxe) - This is a list of random sites sampled by the Department of Ecology's Watershed Health Monitoring Program during 2009-2016. It includes data for riparian cover as measured with a densiometer at the bankfull margins and the amount of stream network represented by the random site. Densiometer data are assigned ratings of riparian condition relative to reference conditions.* [Surplus Funds Expenditures](https://data.wa.gov/d/ti55-mvy5) - This dataset contains expenditures made by from surplus funds accounts of Washington State Candidates for the last 10 years as reported to the PDC on forms C3, C4, Schedule C and their electronic filing equivalents.

A surplus funds account uses the same value for the filer id field in the data set except the surplus account has a "*" in it. This can be used to correlate to the same candidate in other data sets.

For surplus accounts, the number of years is determined by the year of the election, not necessarily the year the expenditure was reported.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See
RCW 42.56.070(9) and AGO 1975 No. 15.* [licenses active](https://data.wa.gov/d/ynd2-ud55) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [License filter](https://data.wa.gov/d/q2gn-dkyk) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Pharmacy Assistant](https://data.wa.gov/d/ewuk-q8pu) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [License](https://data.wa.gov/d/7sdm-u7qf) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Lobbyist Agents](https://data.wa.gov/d/bp5b-jrti) - This dataset contains information about the agents employed by a lobbying firm and the employers they ultimately lobby for.

See the Lobbyist Agent Employers dataset for each individual lobbyist agent to employer relationship.

A lobbyist/firm registers with the PDC, not individual agents (employees) of that firm. The PDC provides this data as a way to see the individuals that lobby for a firm and all the employers of that firm. This does not indicate that a particular agent necessarily lobbied for a particular employer, merely that the agent's firm lobbied for that employer.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Jurisdictions By Election Year](https://data.wa.gov/d/muj8-5iym) - This dataset contains all jurisdictions for which at least one candidate has registered with the PDC or declared their candidacy. Jurisdictions that do not have a campaign finance filing requirement are not displayed. For example, the office of the governor is displayed only for years where the office is up for election. The dataset covers the last 10 years.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Debt Reported by Candidates and Political Committees](https://data.wa.gov/d/3r6b-hsaa) - This dataset contains debts, obligations, and orders placed by Washington State Candidates and Political committees for the last 10 years as reported to the PDC on Schedule B to the C4 Summary Report.

Loans are not included in this dataset. Loans, however, are a debt but are contained in the Loan dataset.

For candidates, the number of years is determined by the year of the election, not necessarily the year the expenditure was reported. For political committees, the number of years is determined by the calendar year of the reporting period.

Candidates and political committees choosing to file under "mini reporting" are not included in this dataset. See WAC 390-16-105 for information regarding eligibility.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See
RCW 42.56.070(9) and AGO 1975 No. 15.* [Percents of Chronic Conditions among Fee-for-Service Medicare Beneficiaries, Washington State and Counties, 2007-2014](https://data.wa.gov/d/qb7g-hu6x) - (Source: CMS Medicare Chronic Conditions Public Use File, January 2016)* [Broadband Adoption and Computer Use by year, state, demographic characteristics](https://data.wa.gov/d/8sap-vzbp) - This dataset is imported from the US Department of Commerce, National Telecommunications and Information Administration (NTIA) and its "Data Explorer" site.  The underlying data comes from the US Census

1. dataset: Specifies the month and year of the survey as a string, in "Mon YYYY" format. The CPS is a monthly survey, and NTIA periodically sponsors Supplements to that survey.

2. variable: Contains the standardized name of the variable being measured. NTIA identified the availability of similar data across Supplements, and assigned variable names to ease time-series comparisons.

3. description: Provides a concise description of the variable.

4. universe: Specifies the variable representing the universe of persons or households included in the variable's statistics. The specified variable is always included in the file. The only variables lacking universes are isPerson and isHouseholder, as they are themselves the broadest universes measured in the CPS.

5. A large number of *Prop, *PropSE, *Count, and *CountSE columns comprise the remainder of the columns. For each demographic being measured (see below), four statistics are produced, including the estimated proportion of the group for which the variable is true (*Prop), the standard error of that proportion (*PropSE), the estimated number of persons or households in that group for which the variable is true (*Count), and the standard error of that count (*CountSE).

DEMOGRAPHIC CATEGORIES

1. us: The usProp, usPropSE, usCount, and usCountSE columns contain statistics about all persons and households in the universe (which represents the population of the fifty states and the District and Columbia). For example, to see how the prevelance of Internet use by Americans has changed over time, look at the usProp column for each survey's internetUser variable.

2. age: The age category is divided into five ranges: ages 3-14, 15-24, 25-44, 45-64, and 65+. The CPS only includes data on Americans ages 3 and older. Also note that household reference persons must be at least 15 years old, so the age314* columns are blank for household-based variables. Those columns are also blank for person-based variables where the universe is "isAdult" (or a sub-universe of "isAdult"), as the CPS defines adults as persons ages 15 or older. Finally, note that some variables where children are technically in the univese will show zero values for the age314* columns. This occurs in cases where a variable simply cannot be true of a child (e.g. the workInternetUser variable, as the CPS presumes children under 15 are not eligible to work), but the topic of interest is relevant to children (e.g. locations of Internet use).

3. work: Employment status is divided into "Employed," "Unemployed," and "NILF" (Not in the Labor Force). These three categories reflect the official BLS definitions used in official labor force statistics. Note that employment status is only recorded in the CPS for individuals ages 15 and older. As a result, children are excluded from the universe when calculating statistics by work status, even if they are otherwise considered part of the universe for the variable of interest.

4. income: The income category represents annual family income, rather than just an individual person's income. It is divided into five ranges: below $25K, $25K-49,999, $50K-74,999, $75K-99,999, and $100K or more. Statistics by income group are only available in this file for Supplements beginning in 2010; prior to 2010, family income range is available in public use datasets, but is not directly comparable to newer datasets due to the 2010 introduction of the practice of allocating "don't know," "refused," and other responses that result in missing data. Prior to 2010, family income is unkown for approximately 20 percent of persons, while in 2010 the Census Bureau began imputing likely income ranges to replace missing data.

5. education: Educational attainment is divided into "No Diploma," "High School Grad,* [Registered Nurse License](https://data.wa.gov/d/688k-siuy) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Health Care Provider Credential Data](https://data.wa.gov/d/qxh8-f4bd) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Contributions to can or comm](https://data.wa.gov/d/5e3y-yit2) - This dataset contains cash and in-kind contributions made to Washington State Candidates and Political Committees for the last 10 years as reported to the PDC on forms C3, C4, Schedule C and their electronic filing equivalents. It does not include loans, pledges or any expenditures.

For candidates, the number of years is determined by the year of the election, not necessarily the year the contribution was reported. For political committees, the number of years is determined by the calendar year of the reporting period.

Candidates and political committees choosing to file under "mini reporting" are not included in this dataset. See WAC 390-16-105 for information regarding eligibility.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information political finance disclosure requirements.

CONDITION OF RELEASE: This publication constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See
RCW 42.56.070(9) and AGO 1975 No. 15.* [Candidate Surplus Funds Latest Report](https://data.wa.gov/d/rsr8-kzau) - This data set shows the last C4 submitted for a surplus account. C4s are submitted for a specific time period and contain a start date and end date.  This dataset shows the last C4 reporting period filed by the candidate and therefore shows the latest balance for the surplus account.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Independent Campaign Expenditures and Electioneering Communications](https://data.wa.gov/d/67cp-h962) - This dataset contains information about independent expenditures, independent expenditure ads, and electioneering communications reported by individuals, businesses, unions, organizations, or any other person as defined in RCW 42.17A for the last 10 years as reported to the PDC on form C6 Independent Expenditure and Electioneering Communications.

Only expenditures meeting the following criteria are reportable (see RCW 42.17A for details):
Independent Expenditures of $100 or more
Independent Expenditure Ads appearing within 21 days of an election costing $1,000 or more
Electioneering Communications appearing within 60 days of an election costing $1,000 or more

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.
Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.
CONDITION OF RELEASE: This publication constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See
RCW 42.56.070(9) and AGO 1975 No. 15.* [Public Health Activities and Services - 2014](https://data.wa.gov/d/i3e8-j9am) - The Public Health Activities and Services (PHAS) data measures what public health does in the state and how much of it is done across all 35 local health agencies and the Department of Health in Washington State each year.  Activities measured fall under the following broad categories:
  Access To Care 
  Assessment 
  Communicable Disease 
  Communicable Disease: Immunization 
  Emergency Preparedness 
  Environmental Health 
  Healthy Families 
  Prevention and Wellness
More PHAS data is available at https://fortress.wa.gov/doh/phip/PHIP/Home.mvc* [Kindergarten Immunization Data, 2015-2016](https://data.wa.gov/d/raxi-vijr) - Washington kindergarten immunization rates by school for 2015-2016* [All students, kindergarten through 12th grade, immunization data by school, 2015-2016](https://data.wa.gov/d/ie96-cgrn) - Washington student immunization rates by school for 2015-2016* [Public Health Activities and Services - Compact View](https://data.wa.gov/d/rd48-d4y8) - The Public Health Activities and Services (PHAS) data measures what public health does in the state and how much of it is done across all 35 local health agencies and the Department of Health in Washington State each year.  Activities measured fall under the following broad categories:
  Access To Care 
  Assessment 
  Communicable Disease 
  Communicable Disease: Immunization 
  Emergency Preparedness 
  Environmental Health 
  Healthy Families 
  Prevention and Wellness
More PHAS data is available at https://fortress.wa.gov/doh/phip/PHIP/Home.mvc* [Lobbyist Agents](https://data.wa.gov/d/bp5b-jrti) - This dataset contains information about the agents employed by a lobbying firm and the employers they ultimately lobby for.

See the Lobbyist Agent Employers dataset for each individual lobbyist agent to employer relationship.

A lobbyist/firm registers with the PDC, not individual agents (employees) of that firm. The PDC provides this data as a way to see the individuals that lobby for a firm and all the employers of that firm. This does not indicate that a particular agent necessarily lobbied for a particular employer, merely that the agent's firm lobbied for that employer.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Jurisdictions By Election Year](https://data.wa.gov/d/muj8-5iym) - This dataset contains all jurisdictions for which at least one candidate has registered with the PDC or declared their candidacy. Jurisdictions that do not have a campaign finance filing requirement are not displayed. For example, the office of the governor is displayed only for years where the office is up for election. The dataset covers the last 10 years.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Debt Reported by Candidates and Political Committees](https://data.wa.gov/d/3r6b-hsaa) - This dataset contains debts, obligations, and orders placed by Washington State Candidates and Political committees for the last 10 years as reported to the PDC on Schedule B to the C4 Summary Report.

Loans are not included in this dataset. Loans, however, are a debt but are contained in the Loan dataset.

For candidates, the number of years is determined by the year of the election, not necessarily the year the expenditure was reported. For political committees, the number of years is determined by the calendar year of the reporting period.

Candidates and political committees choosing to file under "mini reporting" are not included in this dataset. See WAC 390-16-105 for information regarding eligibility.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See
RCW 42.56.070(9) and AGO 1975 No. 15.* [Percents of Chronic Conditions among Fee-for-Service Medicare Beneficiaries, Washington State and Counties, 2007-2014](https://data.wa.gov/d/qb7g-hu6x) - (Source: CMS Medicare Chronic Conditions Public Use File, January 2016)* [Broadband Adoption and Computer Use by year, state, demographic characteristics](https://data.wa.gov/d/8sap-vzbp) - This dataset is imported from the US Department of Commerce, National Telecommunications and Information Administration (NTIA) and its "Data Explorer" site.  The underlying data comes from the US Census

1. dataset: Specifies the month and year of the survey as a string, in "Mon YYYY" format. The CPS is a monthly survey, and NTIA periodically sponsors Supplements to that survey.

2. variable: Contains the standardized name of the variable being measured. NTIA identified the availability of similar data across Supplements, and assigned variable names to ease time-series comparisons.

3. description: Provides a concise description of the variable.

4. universe: Specifies the variable representing the universe of persons or households included in the variable's statistics. The specified variable is always included in the file. The only variables lacking universes are isPerson and isHouseholder, as they are themselves the broadest universes measured in the CPS.

5. A large number of *Prop, *PropSE, *Count, and *CountSE columns comprise the remainder of the columns. For each demographic being measured (see below), four statistics are produced, including the estimated proportion of the group for which the variable is true (*Prop), the standard error of that proportion (*PropSE), the estimated number of persons or households in that group for which the variable is true (*Count), and the standard error of that count (*CountSE).

DEMOGRAPHIC CATEGORIES

1. us: The usProp, usPropSE, usCount, and usCountSE columns contain statistics about all persons and households in the universe (which represents the population of the fifty states and the District and Columbia). For example, to see how the prevelance of Internet use by Americans has changed over time, look at the usProp column for each survey's internetUser variable.

2. age: The age category is divided into five ranges: ages 3-14, 15-24, 25-44, 45-64, and 65+. The CPS only includes data on Americans ages 3 and older. Also note that household reference persons must be at least 15 years old, so the age314* columns are blank for household-based variables. Those columns are also blank for person-based variables where the universe is "isAdult" (or a sub-universe of "isAdult"), as the CPS defines adults as persons ages 15 or older. Finally, note that some variables where children are technically in the univese will show zero values for the age314* columns. This occurs in cases where a variable simply cannot be true of a child (e.g. the workInternetUser variable, as the CPS presumes children under 15 are not eligible to work), but the topic of interest is relevant to children (e.g. locations of Internet use).

3. work: Employment status is divided into "Employed," "Unemployed," and "NILF" (Not in the Labor Force). These three categories reflect the official BLS definitions used in official labor force statistics. Note that employment status is only recorded in the CPS for individuals ages 15 and older. As a result, children are excluded from the universe when calculating statistics by work status, even if they are otherwise considered part of the universe for the variable of interest.

4. income: The income category represents annual family income, rather than just an individual person's income. It is divided into five ranges: below $25K, $25K-49,999, $50K-74,999, $75K-99,999, and $100K or more. Statistics by income group are only available in this file for Supplements beginning in 2010; prior to 2010, family income range is available in public use datasets, but is not directly comparable to newer datasets due to the 2010 introduction of the practice of allocating "don't know," "refused," and other responses that result in missing data. Prior to 2010, family income is unkown for approximately 20 percent of persons, while in 2010 the Census Bureau began imputing likely income ranges to replace missing data.

5. education: Educational attainment is divided into "No Diploma," "High School Grad,* [Registered Nurse License](https://data.wa.gov/d/688k-siuy) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Health Care Provider Credential Data](https://data.wa.gov/d/qxh8-f4bd) - The Washington State Department of Health presents this information as a service to the public. True and correct copies of legal disciplinary actions taken after July 1998 are available on our Provider Credential Search site. These records are considered certified by the Department of Health. 

This includes information on health care providers.

Please contact our Customer Service Center at 360-236-4700 for information about actions before July 1998. 
The information on this site comes directly from our database and is updated daily at 10:00 a.m.. This data is a primary source for verification of credentials and is extracted from the primary database at 2:00 a.m. daily.

News releases about disciplinary actions taken against Washington State healthcare providers, agencies or facilities are on the agency's Newsroom webpage.

Disclaimer
The absence of information in the Provider Credential Search system doesn't imply any recommendation, endorsement or guarantee of competence of any healthcare professional. The presence of information in this system doesn't imply a provider isn't competent or qualified to practice. The reader is encouraged to carefully evaluate any information found in this data set.* [Contributions to can or comm](https://data.wa.gov/d/5e3y-yit2) - This dataset contains cash and in-kind contributions made to Washington State Candidates and Political Committees for the last 10 years as reported to the PDC on forms C3, C4, Schedule C and their electronic filing equivalents. It does not include loans, pledges or any expenditures.

For candidates, the number of years is determined by the year of the election, not necessarily the year the contribution was reported. For political committees, the number of years is determined by the calendar year of the reporting period.

Candidates and political committees choosing to file under "mini reporting" are not included in this dataset. See WAC 390-16-105 for information regarding eligibility.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information political finance disclosure requirements.

CONDITION OF RELEASE: This publication constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See
RCW 42.56.070(9) and AGO 1975 No. 15.* [Candidate Surplus Funds Latest Report](https://data.wa.gov/d/rsr8-kzau) - This data set shows the last C4 submitted for a surplus account. C4s are submitted for a specific time period and contain a start date and end date.  This dataset shows the last C4 reporting period filed by the candidate and therefore shows the latest balance for the surplus account.

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.

Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.

CONDITION OF RELEASE: This publication and or referenced documents constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See RCW 42.56.070(9) and AGO 1975 No. 15.* [Independent Campaign Expenditures and Electioneering Communications](https://data.wa.gov/d/67cp-h962) - This dataset contains information about independent expenditures, independent expenditure ads, and electioneering communications reported by individuals, businesses, unions, organizations, or any other person as defined in RCW 42.17A for the last 10 years as reported to the PDC on form C6 Independent Expenditure and Electioneering Communications.

Only expenditures meeting the following criteria are reportable (see RCW 42.17A for details):
Independent Expenditures of $100 or more
Independent Expenditure Ads appearing within 21 days of an election costing $1,000 or more
Electioneering Communications appearing within 60 days of an election costing $1,000 or more

This dataset is a best-effort by the PDC to provide a complete set of records as described herewith and may contain incomplete or incorrect information. The PDC provides access to the original reports for the purpose of record verification.
Descriptions attached to this dataset do not constitute legal definitions; please consult RCW 42.17A and WAC Title 390 for legal definitions and additional information regarding political finance disclosure requirements.
CONDITION OF RELEASE: This publication constitutes a list of individuals prepared by the Washington State Public Disclosure Commission and may not be used for commercial purposes. This list is provided on the condition and with the understanding that the persons receiving it agree to this statutorily imposed limitation on its use. See
RCW 42.56.070(9) and AGO 1975 No. 15.* [Public Health Activities and Services - 2014](https://data.wa.gov/d/i3e8-j9am) - The Public Health Activities and Services (PHAS) data measures what public health does in the state and how much of it is done across all 35 local health agencies and the Department of Health in Washington State each year.  Activities measured fall under the following broad categories:
  Access To Care 
  Assessment 
  Communicable Disease 
  Communicable Disease: Immunization 
  Emergency Preparedness 
  Environmental Health 
  Healthy Families 
  Prevention and Wellness
More PHAS data is available at https://fortress.wa.gov/doh/phip/PHIP/Home.mvc* [Kindergarten Immunization Data, 2015-2016](https://data.wa.gov/d/raxi-vijr) - Washington kindergarten immunization rates by school for 2015-2016* [All students, kindergarten through 12th grade, immunization data by school, 2015-2016](https://data.wa.gov/d/ie96-cgrn) - Washington student immunization rates by school for 2015-2016* [Public Health Activities and Services - Compact View](https://data.wa.gov/d/rd48-d4y8) - The Public Health Activities and Services (PHAS) data measures what public health does in the state and how much of it is done across all 35 local health agencies and the Department of Health in Washington State each year.  Activities measured fall under the following broad categories:
  Access To Care 
  Assessment 
  Communicable Disease 
  Communicable Disease: Immunization 
  Emergency Preparedness 
  Environmental Health 
  Healthy Families 
  Prevention and Wellness
More PHAS data is available at https://fortress.wa.gov/doh/phip/PHIP/Home.mvc