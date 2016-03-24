package distance;

import java.util.Arrays;
import java.util.Collection;
import java.util.HashSet;
import java.util.Set;

public class Distance
{
	/**
	 * calculates the Jaccard Similarity between two sparse vectors
	 * @param a: sparse vector 
	 * @param b: sparse vector
	 * @return [0,1] where 0 represents no similarity while 1 represents complete similarity
	 */
	public static double getJaccardSimilarity(int[] a, int[] b) {
		int min = (a.length > b.length) ? b.length : a.length;
		if(min == a.length) {
			return getJaccardSimilarityAux(a, b);
		} else {
			return getJaccardSimilarityAux(b, a);
		}
	}
	
	//sparse vector a is smaller then b
	private static double getJaccardSimilarityAux(int[] a, int[] b) {
		Set<Integer> set = new HashSet<>();
		for(int i : b) set.add(i);
		int numerator = 0, denominator = 0, size = set.size();
		for(int i = 0; i < a.length; i++) {
			if(set.contains(a[i])) {
				numerator++;
				size--;
			}
			denominator++;
		}
		return (double) numerator / (denominator + size);
	}
	
}
