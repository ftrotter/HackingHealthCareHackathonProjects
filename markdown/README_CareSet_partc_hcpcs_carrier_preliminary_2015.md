#  CareSet Medicare Advantage (Part C) HCPCS Data Release README

This data release is derived from 2015 Medicare Advantage (Part C) claims data. It is based on HCPCS procedure code utilization aggregated at the state and nationally levels. This data is derived from the [CareSet Access to the preliminary release of the Part C data](https://careset.com/careset-first-with-access-to-advantage-data/). CareSet ([https://careset.com/](https://careset.com/)) is the first organization to release a 'utilization' style data release for Part C data. Because this is based on preliminary data from CMS, it is possible that CareSet may later update this dataset. 

The data adheres to the CMS Privacy policy which states that patient data patterns containing less than 11 patients must be redacted.

It is sourced from MA claims data from the outpatient/professional services (Carrier equivalent)  setting. This release does not include claims from Institutional Outpatient environment. For more information on what Part C Medicare - Advantage data is and how its derived, please see the User Guide [here](https://www.ccwdata.org/documents/10280/19002246/ccw-medicare-encounter-data-user-guide.pdf) from CMS.


For comparison to traditional Medicare Fee-for-service utilization PUF, please refer to the public release by CMS. Their [release](https://www.cms.gov/Research-Statistics-Data-and-Systems/Statistics-Trends-and-Reports/Medicare-Provider-Charge-Data/Physician-and-Other-Supplier2015.html) is separated out by place of service. For fee for service (Part A/B) Medicare there is a substantial payment difference between office-based and facility-based procedures. However, the payment information for Medicare Advantage is proprietary to the private payers who manage the program and is not released by CMS. Given this, we did not distinguish between facility and office-based procedures, since doing so would have reduced the amount of data that we can release publicly, and would not have enabled end users to make valid reimbursement conclusions.  


Two files:
* CareSet_partc_hcpcs_carrier_national_preliminary_2015.csv - Part C National HCPCS Summary File
* CareSet_partc_hcpcs_carrier_state_preliminary_2015.csv - Part C HCPCS Summary File by State

You may need to unzip the files you received in order to see these files

## State Level Part-C Data Structure:

* hcpcs_cd - the procedure code, read more about these codes from [Wikipedia hcpcs cd article](https://en.wikipedia.org/wiki/Healthcare_Common_Procedure_Coding_System)
* state_code - SSA state codes, see link for state to state_code mappings, based on [state_code](https://www.resdac.org/cms-data/variables/state-code-claim-ssa)
* cnt_bene_id - count of distinct patients from [bene_id](https://www.resdac.org/cms-data/variables/beneid)

## National Level Part-C Data Structure:

* hcpcs_cd - the procedure code, read more about these codes from [Wikipedia hcpcs cd article](https://en.wikipedia.org/wiki/Healthcare_Common_Procedure_Coding_System)
* cnt_bene_id - count of distinct patients from [bene_id](https://www.resdac.org/cms-data/variables/beneid)