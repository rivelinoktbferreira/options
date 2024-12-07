<?php
error_reporting(0);
include "functions.php";
$config = $_GET['config'];
if(empty($config)){ echo "Die => Empty Config"; die(); }
echo array(
'empty',
'nm4Zs2j68gva_9ezEi5XhpR|l4XTY6cIPzKEd8jQSVhOkUd|id0007930905@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=8715fc1c5c72a78ed3b93befeabf87d8; horde_secret_key=8715fc1c5c72a78ed3b93befeabf87d8; mail_fwd_id=989fbc227a8944cb5ffd8c6e0f97f35b',
'bdVWU5lRKveOIenzZlLISol|l0pal0Lk-RtLlUPumicN6dw|id0007930912@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=0bd6a94e968d52152c64df86ca4677d4; horde_secret_key=0bd6a94e968d52152c64df86ca4677d4; mail_fwd_id=082f802825d68c8c3cfa4f0f36570a8c',
'rlVWl_4McaqNjg1pEM_EooD|ftYAmDO7CGcjXFzqykLPFdp|id0007931010@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=613c71a8f4ccbcbb29a04f8670cf6dab; horde_secret_key=613c71a8f4ccbcbb29a04f8670cf6dab; mail_fwd_id=f04a33c6bf06f874b7c734a24fab2103',
'tL-qmG4MIALfgdCWOGG9uX6|OEjknDRdyi9aokWFTuy-SMV|id0007930881@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=607c8766fb91dc5f710b3bb9b9a1cd35; horde_secret_key=607c8766fb91dc5f710b3bb9b9a1cd35; mail_fwd_id=7eeb10068d0db139bf3df28994e091d1',
'Ay0xr48lXw9MwJqdV7Ny44g|tosRsRcS7e-cgfe9d1CBub7|id0007930865@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=f4d2520f26960d97f75d150a5876c64d; horde_secret_key=f4d2520f26960d97f75d150a5876c64d; mail_fwd_id=2e856eddc241146562915d2f6b545d30',
'NqgPaVB1IbYozBmU0Y_jHR9|oqieN2RkQUzgPqYdRhHT-1b|id0007930999@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=78ba007a20ed44deffc303032a9905f7; horde_secret_key=78ba007a20ed44deffc303032a9905f7; mail_fwd_id=9c0a534e3d5ca55b01d10734b66547bf',
'8ywlrA3pY8uA0FJPj-0fzRi|H-mVOsfX1jIQgPs8Ow4BTEX|id0007930916@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=d82f4858dc5d4c9f3e6f28f160ba5429; horde_secret_key=d82f4858dc5d4c9f3e6f28f160ba5429; mail_fwd_id=7aae4a9aac0ba93b0241f5483eff76e1',
'gnisNtBmktQwT_DOjiSmeqn|ppDTVurLF4mvGIsoBFweC3E|id0007931007@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=a9e66e52f44ca41f59f7b2d6f04e057e; horde_secret_key=a9e66e52f44ca41f59f7b2d6f04e057e; mail_fwd_id=df2be1789d328adcc2a6494c1d9000b0',
'LNwHZg94usBH5N05oN4HsuM|9CsN-tSTnOHDMgmRL3L-IZ9|id0007930875@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=0d477beed586ac61fed7478fdaca5ee0; horde_secret_key=0d477beed586ac61fed7478fdaca5ee0; mail_fwd_id=83598cd9923b85f9b8e73695a91bd1ee',
'p0jrvmAaDLpgYaIeOt8iSNS|7Rc2imexV2cdj5jmIPFHbUa|id0007930879@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=3e97ccd9ce91a1e710de28c172799dd5; horde_secret_key=3e97ccd9ce91a1e710de28c172799dd5; mail_fwd_id=b6bd32ce9bd6399226ce3ec1c4566c58',
'p2xOD2TNAKTz5-j6QF0wttw|vard5UOsVZV_MyCzGqM08fX|id0007930909@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=1d2fc7ffc56fabb3983173374c57d2bc; horde_secret_key=1d2fc7ffc56fabb3983173374c57d2bc; mail_fwd_id=b1ac179e074ab7abbb4165d5dbb7a36d',
'O5M9tWTHcLXSCMwV_NR3Z-D|HL8XdkQn8ki8fExdv0lQod8|id0007930884@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=b709ecd17e844be506b9d69779768031; horde_secret_key=b709ecd17e844be506b9d69779768031; mail_fwd_id=7db107f38d7d0a0511f25538fb7bd28d',
'trHkBNQ8RZTwxGOelEG7DUY|YPo2d206N9cQnGLEiAqxv66|id0007930948@sso.sapo.pt|SPM_CONSENT=PT_pt%2Bbrowser; v1_7PtmailH5g=ca11486cbb624299330d17fec8e25085; horde_secret_key=ca11486cbb624299330d17fec8e25085; mail_fwd_id=fe3a05fab6b42c9c9e5ec3ad47e2323a',
)[$config];
