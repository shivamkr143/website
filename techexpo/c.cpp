
ll count = 0;
	REP(i,n-1)
	{	
		if(l < ranges[i].first)
		{
			if(r < ranges[i].first)
			{
				break;
			}
			else if(r <= ranges[i].second)
			{
				count += r-ranges[i].first + 1;
				break;
			}
			else
			{
				count += ranges[i].second - ranges[i].first + 1;
				l = ranges[i].second + 1;
			}
		}
		else if(l <= ranges[i].second)
		{
			if(r < ranges[i].first)
			{
				break;
			}
			else if(r <= ranges[i].second)
			{
				count += r-l + 1;
				break;
			}
			else
			{
				count += ranges[i].second - l + 1;
				l = ranges[i].second + 1;
			}
		}
		if(l > r)
		{
			break;
		}
	}
	cout<<count<<endl;