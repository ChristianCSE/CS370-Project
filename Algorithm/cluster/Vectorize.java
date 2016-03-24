package cluster;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class Vectorize
{
	Map<String, Integer> likesDB;

	public Vectorize() {
		try {
			likesDB = LikeDB.read("/Users/alexlutz/Documents/SchoolWork/FacebookLikes.ser");
		} catch (ClassNotFoundException | IOException e)
		{
			e.printStackTrace();
		}
	}
	
	public int[] vectorizeToDenseVector(String... likes) { 	//TODO:convert to bit map
		int[] denseVector = new int[likesDB.size()];
		for(String like : likes) {
			denseVector[likesDB.get(like)] = 1;
		}
		return denseVector;
	}
	
	public int[] vectorizeToSparseVector(String... likes) {
		List<Integer> tempList = new ArrayList<>();
		int counter = 0;
		for(String like : likes) {
			if(likesDB.get(like) != null) {
				tempList.add(likesDB.get(like));
			} else {
				likesDB.put(like, likesDB.size()+1);
				tempList.add(likesDB.get(like));
			}
		}
//		Integer[] test = tempList.stream().toArray(Integer[]::new);
		int[] sparseVector = new int[tempList.size()];
		for(Integer i : tempList) {
			sparseVector[counter++] = i;
		}
		return sparseVector;
	}
}
