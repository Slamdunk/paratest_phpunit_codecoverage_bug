.PHONY: all
all: clean ccdebug

.PHONY: test
test: vendor
	vendor/bin/phpunit ${arg}

.PHONY: paratest
paratest: vendor
	vendor/bin/paratest --runner WrapperRunner ${arg}

.PHONY: code-coverage
code-coverage: vendor
	php -d pcov.enabled=1 vendor/bin/paratest --runner WrapperRunner --passthru-php="'-d' 'pcov.enabled=1'" --coverage-html=./data/code-coverage/ ${arg}

.PHONY: ccdebug
ccdebug: vendor
	php -d pcov.enabled=1 vendor/bin/phpunit --coverage-html=./tmp/cc0_html/ --coverage-xml=tmp/cc0_xml ${arg}
	php -d pcov.enabled=1 vendor/bin/paratest --runner WrapperRunner --passthru-php="'-d' 'pcov.enabled=1'" --processes=1 --coverage-html=./tmp/cc1_html/ --coverage-xml=tmp/cc1_xml ${arg}
	php -d pcov.enabled=1 vendor/bin/paratest --runner WrapperRunner --passthru-php="'-d' 'pcov.enabled=1'" --processes=2 --coverage-html=./tmp/cc2_html/ --coverage-xml=tmp/cc2_xml ${arg}
	bash -c 'grep 17 tmp/cc{0,1,2}_xml/Aaa.php.xml'
	#bash -c 'for i in tmp/cc{0,1,2}_html/Aaa.php.html ; do xdg-open "file://""$$PWD""/""$$i""#14"; done;'

.PHONY: clean
clean:
	rm -rf .php_cs.cache tmp/*
