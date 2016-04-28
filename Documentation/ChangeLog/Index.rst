.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _changelog:

ChangeLog
=========

The following is a very high level overview of the changes in this extension.

.. tabularcolumns:: |r|p{13.7cm}|

=========  ===========================================================================
Version    Changes
=========  ===========================================================================
1.5.11     - added support for TYPO3 7.6
1.5.10     - call session_start only if caching is done through session
1.5.8      - some bugfixes
1.5.7      - insert Plugin through preprocessRequest hook for earliest possible detection
           - added caretaker parameters as exceptions by default
1.5.6      - option to exclude IPs from detection ( :ref:`configuration` )
1.5.2      - \*_session cookies added to whitelist
1.5.1      - some optimizations
1.5.0      - Initial Release
=========  ===========================================================================
