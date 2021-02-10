Original:
https://codepen.io/cycymomo/pen/jOVMGqZ?editors=1010


PK:
https://codepen.io/pkatdailymotion/pen/VwmKyMR


Slack:
https://dailymotion.slack.com/archives/C0JHM40QG/p1612945694056300
note: https://dailymotion.slack.com/archives/C0JHM40QG/p1612945931057100

'''
side note, I'm not sure their logic is going to work as expected: if they wait for a videochange to get the tags of the loaded video and inject the value as ads_params, it's too late.
When videochange is triggered, the current ads_params have already been injected in the AdDirector. So with their current code, for each video loaded, they will get the tags from the previous video
'''


