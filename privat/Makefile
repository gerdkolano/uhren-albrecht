.PHONY : upload

upload:
	$(MAKE) -C /home/hanno/uhren-albrecht upload

ullstein-protokolli-veraltet:
	ssh hanno@fadi "make -C /home/hanno/erprobe/pal-kalender/pal-0.3.4/src pal"
	ssh root@fadi "make -C /home/hanno/erprobe/pal-kalender/pal-0.3.4/src install-bin"
	make -C /home/hanno/erprobe/pal-kalender/pal-0.3.4/src install-bin
	/home/hanno/joomla/joomla-artikel/sende-datei-an-id.pl \
		/daten/srv/www/uhren-albrecht.hopto.org/privat/ullstein-protokoll.html 1484
	/home/hanno/joomla/joomla-artikel/upload-to-uhren-albrecht.sh
