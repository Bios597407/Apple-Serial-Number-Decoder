# Apple-Serial-Number-Decoder
PHP Script for Decoding Apple Serial Numbers

__Usage:__
Place the 3 files on your webserver. Visit index.html. Or copy the `<form> ... </form>` section from the index.html file and insert it into your own webpage. Have fun!

__Database:__
The database.json file is self updating. So when you search a serial number, it first scans the database for the hwc code (last 3#'s if 11 digit or 4#'s if 12 digit serial) to see if the information exists in the database. If it doesn't, then it uses apple's api to look up the hwc and then appends that info to the json database.

__TODO:__
This decoder currently displays a break down of the serial number components (for serials up to 2019), displays model information, manufacture information and links to apple's official hardware configurations. Sites like everymac.com or appleserialinfo.com expand on the information provided by this script greatly with model and emc #'s, configuration options, specs etc. It would be nice if someone forked this and expanded upon the json database file to incorporate these additional fields and supply the community with a free database alternative opposed to subscription based decoding options!
