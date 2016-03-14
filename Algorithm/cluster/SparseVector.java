package cluster;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class SparseVector
{
	private int[] indices;
	
	public SparseVector(int[] vector)
	{
		int mover = 0;
		indices = new int[Arrays.stream(vector).sum()];
		for(int i = 0; i < vector.length; i++) 
		{
			if(vector[i] == 1) indices[mover++] = i;
		}
	}

	public int[] getIndices()
	{
		return indices;
	}

	public void setIndices(int[] indices)
	{
		this.indices = indices;
	}

}
