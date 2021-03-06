=========================
PHPMD - PHP Mess Detector
=========================

This is the project site of *PHPMD*. It is a spin-off project of
`PHP Depend`__ and aims to be a PHP equivalent of the well known
Java tool `PMD`__. PHPMD can be seen as an user friendly and easy
to configure frontend for the raw metrics measured by PHP Depend.

__ http://pdepend.org
__ http://pmd.sourceforge.net

What PHPMD does is: It takes a given PHP source code base and look 
for several potential problems within that source. These problems
can be things like:

- Possible bugs
- Suboptimal code
- Overcomplicated expressions
- Unused parameters, methods, properties

PHPMD is a young project and so it only provides a limited set of
pre defined rules, compared with it's brother PMD, that detect code
smells and possible errors within the analyzed source code. Checkout
the `rules section`__ to learn more about all implemented rules.

__ /rules/index.html

Recent Releases
===============

- 2011/02/20 - PHPMD 1.1.0: New feature `release`__ of PHPMD that provides two
  new rules that will measure the quality of a project.
- 2011/02/12 - PHPMD 1.0.1: New Bugfix `release`__ that closes two
  issues in release 1.0.0.
- 2011/02/05 - PHPMD 1.0.0: We are proud to announce the first stable
  1.0.0 `release`__ of the PHP Mess Detector.
- 2010/10/01 - PHPMD 0.2.7: Bugfix `release`__ of the PHP Mess Detector.
  Please take a look at the `CHANGELOG`__ for the concrete changes.
- 2010/08/10 - New release of PHPMD's `Java Binding`__ and the Ant
  `extension`__.

__ /download/releases/1.1.0/changelog.html
__ /download/releases/index.html
__ /download/releases/index.html
__ /download/releases/index.html
__ http://tracker.pdepend.org/php_mess_detector/browse_code/view/CHANGELOG#line1
__ /download/extensions#java-binding 
__ /download/extensions#ant-task
