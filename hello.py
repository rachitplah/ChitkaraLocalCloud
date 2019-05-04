import re
import config

from robobrowser import RoboBrowser

br = RoboBrowser()
br.open("https://192.168.100.1:6082/php/uid.php?vsys=1&rule=2&url=http://chitkara.cloud/ChitkaraLocalCloud/home.php",verify=False)
form = br.get_form()
form['user'] = config.DATACOUP_USERNAME
form['passwd'] = config.DATACOUP_PASSWORD
br.submit_form(form)

src = str(br.parsed())

start = '<title>'
end = '</title>'

result = re.search('%s(.*)%s' % (start, end), src).group(1)

print(result)
