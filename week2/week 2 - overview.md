## Week 2 (April 7 to 11)
### Tuesday
- test bitsync
- go over puzzle
- cross-site scripting (XSS)
	- description
	- how it works
	- why it's so common
	- why it's bad
	- how to find it
	- how to mitigate
- reflective XSS
- stored XSS
- DOM XSS
- resources
	- https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet
	- http://www.thespanner.co.uk/
- XSS demos
	- simple login page
- XSS practice
	- blogged-on.de
	- testfire.net
	- http://xss-quiz.int21h.jp/ (challenges 1-8)

### Wednesday
- OpenSSL Heartbleed attack walkthrough

### Thursday
- a note on heartbleed
- burp suite setup/configuration
- filter bypass techniques
	- no spaces
	- no script tag
	- no key words
	- encoding
	- XSS via images
- weaponsized XSS
	- exfil
	- fake login page
	- worms
	- BeEF
	- XSS-Harvest
- do stuff
	- mutilidae
	- DVWA
	- XSS challenges: http://xss-quiz.int21h.jp/
	- XSS exfiltration
	- filter bypassing
	- xssed

### Homework
- primary
	- XSS challenges
		- 13 challenges of increasing difficulty
		- must complete 11 for 100% (extra are extra points)
	- special payloads
		- XSS exfiltration payload
	- pentest report
		- one overall description (3-5 sentences)
		- repro steps for 3 highest
		- mitigation recommendations
			- ASP.NET
			- PHP
			- Ruby on Rails
	- due next thursday
- secondary
	- reading on CSRF and Clickjacking
		- WAHH Chapter 13 section on "Inducing User Action" (501-515)