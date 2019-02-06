include .properties.mk
DOMAIN ?= tst.pomeranian-beauties.pl
SERVER ?= 
REMOTE_FOLDER: ?=

## Run remote git commands
#
# Usage: make git.status
#        make git.fetch
#        make git.pull
#        make git.status DOMAIN=pomeranian-beauties.pl 
git.%:
	ssh $(SERVER) "cd $(REMOTE_FOLDER)/$(DOMAIN)/pomeranian-beauties.pl && git $(subst git.,,$@)"

## Create properties file
# Make sure to put SERVER and REMOTE_FOLDER
.properties.mk:
	touch .properties.mk
