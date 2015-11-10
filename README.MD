##RMS Interface which enables Turtlebot Teleoperation On demand

An interface to be used with RMS (Robotics Management System) to enable users to tele-operate a turtlebot when it gets stuck and pings back for support.

Includes:
* Video Feed
* Keyboard Teleoperation

To Include:
* 2d NavMap widget
* Recording of keystrokes
* Smooth transition from autonomous to teleoperated

##How to use

Put the controller file in "path/to/rms/app/Controller/" and the interface folder in "path/to/rms/app/View"
In RMS the interface that you create should have the same name as this folder, for eg, if folder is "ABCInterface" then the name of interface in RMS should be "ABC"