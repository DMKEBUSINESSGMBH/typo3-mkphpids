.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _configuration:

Configuration
=============

Use the Constant Editor template tool to set these properties. If you are not
using the Constant editor to configure the extension, you should analyze
carefully the use of these constants in the default setup file.

+-------------------------+-----------+---------------------------------+---------+
| Property                | Data type | Description                     | Default |
+=========================+===========+=================================+=========+
| General.debug_mode      | boolean   | Debug Mode: Turn on or off      | 0       |
|                         |           | debug mode.                     |         |
+-------------------------+-----------+---------------------------------+---------+
| Impact.print_to_screen  | int       | Print to screen Threshold:      | 0       |
| _threshold              |           | Threshold for showing an impact |         |
|                         |           | on the screen                   |         |
+-------------------------+-----------+---------------------------------+---------+
| Impact.file_threshold   | int       | File Threshold: Threshold for   | 0       |
|                         |           | reporting an impact to the      |         |
|                         |           | logfile defined in Logging.path |         |
+-------------------------+-----------+---------------------------------+---------+
| Impact.db_threshold     | int       | DB Threshold: Threshold for     | 15      |
|                         |           | reporting an impact to the      |         |
|                         |           | database shown in the PHPIDS    |         |
|                         |           | backend module                  |         |
+-------------------------+-----------+---------------------------------+---------+
| Impact.email_threshold  | int       | E-Mail Threshold: Threshold for | 20      |
|                         |           | reporting an impact by e-mail   |         |
|                         |           | specified in Logging.email      |         |
+-------------------------+-----------+---------------------------------+---------+
| Impact.die_threshold    | int       | Die Threshold: Threshold for    | 65      |
|                         |           | locking the homepage to the     |         |
|                         |           | attacker with a                 |         |
|                         |           | session_destroy() and PHP die() |         |
+-------------------------+-----------+---------------------------------+---------+
| Impact.die_redirect_pid | string    | pid or alias to redirect to     |         |
|                         |           | after die                       |         |
+-------------------------+-----------+---------------------------------+---------+
