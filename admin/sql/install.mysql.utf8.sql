DROP TABLE IF EXISTS #__hnx_joomgallery;
 
CREATE TABLE #__hnx_joomgallery (
    id INT(11) NOT NULL AUTO_INCREMENT,
    greeting VARCHAR(25) NOT NULL,
    cat_id INT(11) NOT NULL DEFAULT 0,
    params TEXT NOT NULL DEFAULT '',
    PRIMARY KEY  (id)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
 
INSERT INTO #__hnx_joomgallery (greeting) VALUES
        ('Hello World!'),
        ('Good bye World!');