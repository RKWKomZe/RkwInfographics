# rkw_infographics
## Upgrade to v9.5
Please make sure to execute the following MySQL-statements.
```
UPDATE tt_content SET list_type = "rkwinfographics_main" WHERE list_type = "rkwinfographics_infographics";
UPDATE tt_content SET list_type = "rkwinfographics_infographictitle" WHERE list_type = "rkwinfographics_title";
UPDATE tt_content SET list_type = "rkwinfographics_infographiccover" WHERE list_type = "rkwinfographics_cover";
```
