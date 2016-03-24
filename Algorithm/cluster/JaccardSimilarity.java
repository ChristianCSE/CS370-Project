package cluster;

import java.util.Arrays;
import java.util.Collection;
import java.util.HashSet;
import java.util.Set;

public class JaccardSimilarity
{
	public double findSimilarity(SparseVector a, SparseVector b)
	{
		long numerator = 0;
		int[] smallerSet;
		Set<Integer> otherSet;
		if(a.getIndices().length > b.getIndices().length) {
			otherSet = new HashSet<>((Collection) Arrays.asList(a.getIndices()));
			smallerSet = b.getIndices();
		} else {
			otherSet = new HashSet<>((Collection) Arrays.asList(b.getIndices()));
			smallerSet = a.getIndices();
		}

		for(int i = 0; i < smallerSet.length; i++) {
			if(otherSet.contains(smallerSet[i])) {
				numerator++;
			}
		}
		return numerator;	//need to divide by a total count which should be stored somewhere
	}
}
